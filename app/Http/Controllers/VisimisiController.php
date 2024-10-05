<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visi;
use App\Models\Misi;


use Illuminate\Support\Facades\Storage;

class VisimisiController extends Controller
{
    // Menampilkan halaman Visi dan Misi
    public function index()
    {
        $visi = Visi::first(); // Mengambil data Visi
        $misis = Misi::all(); // Mengambil semua data Misi
        return view('visimisi.index', compact('visi', 'misis'));
    }

    // Memperbarui data Visi
    public function visiupdate(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi_1' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'deskripsi_2' => 'nullable|string|max:255',
        ]);
    
        // Ambil data visi berdasarkan ID
        $visi = Visi::findOrFail($id);
    
        // Siapkan data untuk diupdate
        $data = [
            'judul' => $request->judul,
            'deskripsi_1' => $request->deskripsi_1,
            'deskripsi_2' => $request->deskripsi_2,
        ];
    
        // Cek jika ada file foto yang diupload
        if ($request->hasFile('photo')) {
            // Hapus gambar lama jika ada
            if ($visi->photo) {
                Storage::disk('public')->delete('photo-user/' . $visi->photo);
            }
    
            // Unggah gambar baru
            $photo = $request->file('photo');
            $filename = time() . '-' . $photo->getClientOriginalName(); // Gunakan time untuk menghindari nama yang sama
            $path = 'photo-user/' . $filename;
    
            // Simpan gambar baru ke storage
            Storage::disk('public')->put($path, file_get_contents($photo));
    
            // Tambahkan nama file gambar baru ke data
            $data['photo'] = $filename; // Pastikan ini 'photo'
        } else {
            // Jika tidak ada foto baru, tetap gunakan foto lama
            $data['photo'] = $visi->photo;
        }
    
        // Perbarui data
        $visi->update($data);
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.visimisi')->with('success', 'Data berhasil di Update!');
    }
    
             

    


    // Menampilkan form untuk menambah Misi
    public function create()
    {
        return view('visimisi.create');
    }

    // Menampilkan form untuk mengedit Misi
    public function editMisi($id)
    {
        $misi = Misi::findOrFail($id);
        return view('visimisi.edit', compact('misi'));
    }

    // Menyimpan Misi yang baru dibuat
    public function storeMisi(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        Misi::create($validatedData);
    
        return redirect()->route('admin.visimisi')->with('success', 'Misi berhasil ditambahkan.');
    }

    // Memperbarui data Misi
    public function updateMisi(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $misi = Misi::findOrFail($id);
        $misi->update($validatedData);

        return redirect()->route('admin.visimisi')->with('success', 'Misi berhasil diperbarui.');
    }

    // Menghapus Misi
    public function deleteMisi($id)
    {
        $misi = Misi::findOrFail($id);
        $misi->delete();

        return redirect()->route('admin.visimisi')->with('success', 'Misi berhasil dihapus.');
    }
}

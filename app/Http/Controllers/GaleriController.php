<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeris = Galeri::all();

        return view('galeri.index',compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
             // Validasi input
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'photo' => 'required|mimes:jpg,png,jpeg|max:2048', // Foto wajib diunggah
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    // Menangani upload foto
    $photo = $request->file('photo');

    $filename = date('Y-m-d') . '-' . $photo->getClientOriginalName();
    $path = 'photo-user/' . $filename;
    Storage::disk('public')->put($path, file_get_contents($photo));

    // Menyimpan data
    $data = [
        'title' => $request->input('title'),
        'image' => $filename,
    ];

    // Masukkan data ke database
    Galeri ::create($data);

    // Redirect dengan pesan sukses
    return redirect()->route('admin.GaleriIndex')->with('success', 'Data Galeri berhasil di tambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'photo' => 'nullable|mimes:jpg,png,jpeg|max:2048', // Nullable untuk opsi upload foto
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    
        // Menyimpan data
        $data = [
            'title' => $request->input('title'),
        
        ];
    
        // Cek apakah ada file foto yang diunggah
        if ($request->hasFile('photo')) {
            // Hapus gambar lama jika ada
            if ($galeri->image) {
                Storage::disk('public')->delete('photo-user/' . $galeri->image);
            }
    
            // Unggah gambar baru
            $photo = $request->file('photo');
            $filename = date('Y-m-d') . '-' . $photo->getClientOriginalName();
            $path = 'photo-user/' . $filename;
            Storage::disk('public')->put($path, file_get_contents($photo));
    
            // Tambahkan nama file gambar baru ke data
            $data['image'] = $filename;
        } else {
            // Jika tidak ada foto baru, pertahankan gambar lama
            $data['image'] = $galeri->image;
        }
    
        // Perbarui data slider
        $galeri->update($data);
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.GaleriIndex')->with('success', 'Galeri berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        if ($galeri->image) {
            Storage::disk('public')->delete('photo-user/' . $galeri->image);
        }
    
        // Hapus slider dari database
        $galeri->delete();
    
        // Redirect atau kembali dengan pesan sukses
        return redirect()->route('admin.GaleriIndex')->with('success', ' Data Galeri berhasil di Hapus !');
    }
}

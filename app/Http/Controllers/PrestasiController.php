<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasis = Prestasi::all();

        return view('prestasi.index',compact('prestasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
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
        'description' => $request->input('description'),
        'image' => $filename,
    ];

    // Masukkan data ke database
    Prestasi ::create($data);

    // Redirect dengan pesan sukses
    return redirect()->route('admin.PrestasiIndex')->with('success', 'Data Prestasi berhasil di tambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(prestasi $prestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prestasi $prestasi)
    {
        return view('prestasi.edit', compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prestasi $prestasi)
    {
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'photo' => 'nullable|mimes:jpg,png,jpeg|max:2048', // Nullable untuk opsi upload foto
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    // Menyimpan data
    $data = [
        'title' => $request->input('title'),
        'description' => $request->input('description'),
    ];

    // Cek apakah ada file foto yang diunggah
    if ($request->hasFile('photo')) {
        // Hapus gambar lama jika ada
        if ($prestasi->image) {
            Storage::disk('public')->delete('photo-user/' . $prestasi->image);
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
        $data['image'] = $prestasi->image;
    }

    // Perbarui data slider
    $prestasi->update($data);

    // Redirect dengan pesan sukses
    return redirect()->route('admin.PrestasiIndex')->with('success', 'Prestasi berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prestasi $prestasi)
    {
            // Hapus file gambar yang terkait dengan slider
    if ($prestasi->image) {
        Storage::disk('public')->delete('photo-user/' . $prestasi->image);
    }

    // Hapus slider dari database
    $prestasi->delete();

    // Redirect atau kembali dengan pesan sukses
    return redirect()->route('admin.PrestasiIndex')->with('success', 'Prestasi berhasil di Hapus !');
    }
}

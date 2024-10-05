<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = Guru::all();

        return view('guru.index',compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
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
    Guru ::create($data);

    // Redirect dengan pesan sukses
    return redirect()->route('admin.GuruIndex')->with('success', 'Data Guru berhasil di tambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
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
            if ($guru->image) {
                Storage::disk('public')->delete('photo-user/' . $guru->image);
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
            $data['image'] = $guru->image;
        }
    
        // Perbarui data slider
        $guru->update($data);
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.GuruIndex')->with('success', 'Guru berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        if ($guru->image) {
            Storage::disk('public')->delete('photo-user/' . $guru->image);
        }
    
        // Hapus slider dari database
        $guru->delete();
    
        // Redirect atau kembali dengan pesan sukses
        return redirect()->route('admin.GuruIndex')->with('success', ' Data Guru berhasil di Hapus !');
    }
}

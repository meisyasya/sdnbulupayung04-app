<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // Menyimpan data
        $data = $request->only(['nama', 'jenis_kelamin', 'alamat']);

        // Masukkan data ke database
        Siswa::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.SiswaIndex')->with('success', 'Data Siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'alamat' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // Cari data yang akan diupdate
        $siswa = Siswa::findOrFail($id);

        // Update data
        $data = $request->only(['nama', 'jenis_kelamin', 'alamat']);
        $siswa->update($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.SiswaIndex')->with('success', 'Siswa berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('admin.SiswaIndex')->with('success', 'Siswa berhasil dihapus!');
    }
}

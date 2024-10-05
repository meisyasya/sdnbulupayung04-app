<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa6;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class Siswa6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa6::all();
        return view('siswa6.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa6.create');
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
        Siswa6::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.Siswa6Index')->with('success', 'Data Siswa berhasil ditambahkan!');
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
    public function edit(string $siswa6)
    {
        $siswa = Siswa6::findOrFail($siswa6);
        return view('siswa6.edit', compact('siswa'));
    }
    
    public function update(Request $request, string $siswa6)
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
        $siswa = Siswa6::findOrFail($siswa6);
    
        // Update data
        $data = $request->only(['nama', 'jenis_kelamin', 'alamat']);
        $siswa->update($data);
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.Siswa6Index')->with('success', 'Siswa berhasil diupdate!');
    }
    
    public function destroy(string $siswa6)
    {
        $siswa = Siswa6::findOrFail($siswa6);
        $siswa->delete();
    
        return redirect()->route('admin.Siswa6Index')->with('success', 'Siswa berhasil dihapus!');
    }
    

}

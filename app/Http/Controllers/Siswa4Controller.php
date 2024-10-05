<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa4;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class Siswa4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa4::all();
        return view('siswa4.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa4.create');
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
        Siswa4::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.Siswa4Index')->with('success', 'Data Siswa berhasil ditambahkan!');
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
    public function edit(string $siswa4)
    {
        $siswa = Siswa4::findOrFail($siswa4);
        return view('siswa4.edit', compact('siswa'));
    }
    
    public function update(Request $request, string $siswa4)
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
        $siswa = Siswa4::findOrFail($siswa4);
    
        // Update data
        $data = $request->only(['nama', 'jenis_kelamin', 'alamat']);
        $siswa->update($data);
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.Siswa4Index')->with('success', 'Siswa berhasil diupdate!');
    }
    
    public function destroy(string $siswa4)
    {
        $siswa = Siswa4::findOrFail($siswa4);
        $siswa->delete();
    
        return redirect()->route('admin.Siswa4Index')->with('success', 'Siswa berhasil dihapus!');
    }
    

}

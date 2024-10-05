<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa5;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class Siswa5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa5::all();
        return view('siswa5.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa5.create');
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
        Siswa5::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.Siswa5Index')->with('success', 'Data Siswa berhasil ditambahkan!');
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
    public function edit(string $siswa5)
    {
        $siswa = Siswa5::findOrFail($siswa5);
        return view('siswa5.edit', compact('siswa'));
    }
    
    public function update(Request $request, string $siswa5)
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
        $siswa = Siswa5::findOrFail($siswa5);
    
        // Update data
        $data = $request->only(['nama', 'jenis_kelamin', 'alamat']);
        $siswa->update($data);
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.Siswa5Index')->with('success', 'Siswa berhasil diupdate!');
    }
    
    public function destroy(string $siswa5)
    {
        $siswa = Siswa5::findOrFail($siswa5);
        $siswa->delete();
    
        return redirect()->route('admin.Siswa5Index')->with('success', 'Siswa berhasil dihapus!');
    }
    

}

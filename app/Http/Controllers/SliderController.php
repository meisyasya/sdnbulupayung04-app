<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slider.create');
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
            'image' => $filename, // Sesuaikan dengan kolom 'image' di database
        ];

        // Masukkan data ke database
        Slider::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.SliderIndex')->with('success', 'Slider berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        // Validasi input
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
            if ($slider->image) {
                Storage::disk('public')->delete('photo-user/' . $slider->image);
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
            $data['image'] = $slider->image;
        }

        // Perbarui data slider
        $slider->update($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.SliderIndex')->with('success', 'Slider berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        // Hapus file gambar yang terkait dengan slider
        if ($slider->image) {
            Storage::disk('public')->delete('photo-user/' . $slider->image);
        }

        // Hapus slider dari database
        $slider->delete();

        // Redirect atau kembali dengan pesan sukses
        return redirect()->route('admin.SliderIndex')->with('success', 'Slider berhasil dihapus!');
    }
}

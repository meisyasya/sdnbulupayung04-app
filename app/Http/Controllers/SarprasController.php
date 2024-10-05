<?php

namespace App\Http\Controllers;

use App\Models\Sarpras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SarprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarprass = Sarpras::all();

        return view('sarpras.index',compact('sarprass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sarpras.create');
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
    $path = 'photo-sarpras/' . $filename;
    Storage::disk('public')->put($path, file_get_contents($photo));

    // Menyimpan data
    $data = [
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'image' => $filename,
    ];

    // Masukkan data ke database
    Sarpras ::create($data);

    // Redirect dengan pesan sukses
    return redirect()->route('admin.SarprasIndex')->with('success', 'Data Sarpras berhasil di tambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sarpras $sarpras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sarpras = Sarpras::findOrFail($id);
        return view('sarpras.edit', compact('sarpras'));
    }
    
    public function update(Request $request, $id)
{
    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'photo' => 'nullable|mimes:jpg,png,jpeg|max:2048', // Ensure this matches your input name
    ]);

    // If validation fails, redirect back with errors
    if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }

    // Retrieve the Sarpras model instance
    $sarpras = Sarpras::findOrFail($id);

    // Prepare data for update
    $data = [
        'title' => $request->input('title'),
        'description' => $request->input('description'),
    ];

    // Check if a new photo has been uploaded
    if ($request->hasFile('photo')) {
        // Delete the old photo if it exists
        if ($sarpras->image) { // Check for 'image' instead of 'photo'
            Storage::disk('public')->delete('photo-sarpras/' . $sarpras->image);
        }

        // Upload the new photo
        $photo = $request->file('photo');
        $filename = date('Y-m-d') . '-' . $photo->getClientOriginalName();
        $path = 'photo-sarpras/' . $filename;

        // Store the photo
        Storage::disk('public')->put($path, file_get_contents($photo));

        // Add the new image filename to the data
        $data['image'] = $filename; // Use 'image' consistently
    } else {
        // If no new photo, retain the old photo
        $data['image'] = $sarpras->image; // Use 'image' instead of 'photo'
    }

    // Update the Sarpras record
    $sarpras->update($data);

    // Redirect with a success message
    return redirect()->route('admin.SarprasIndex')->with('success', 'Sarpras berhasil di Update!');
}

public function deleteSarpras($sarpra)
{
    // Retrieve the Sarpras model instance
    $sarpras = Sarpras::findOrFail($sarpra);

    // Check if there's a photo and delete it from the storage
    if ($sarpras->photo) {
        Storage::disk('public')->delete('photo-sarpras/' . $sarpras->photo);
    }

    // Delete the sarpras record from the database
    $sarpras->delete();

    // Redirect with a success message
    return redirect()->route('admin.SarprasIndex')->with('success', 'Sarpras berhasil dihapus!');
}

}
<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan dashboard
        $about = About::first();

        return view('about',compact('about'));
    }

   public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'subjudul' => 'required|string|max:255',
        'photo' => 'nullable|mimes:jpg,png,jpeg|max:2048',
        // Validasi untuk field lain
    ]);

    $about = About::findOrFail($id);

    // Jika ada file foto yang diupload
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/photos', $fileName); // Menyimpan di storage/app/public/photos
        $about->photo = $fileName; // Simpan nama file di database
    }

    $about->update($request->except('photo')); // Update data kecuali foto

    return redirect()->route('admin.about')->with('success', 'Data updated successfully');
}


}

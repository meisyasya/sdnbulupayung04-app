<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PpdbController extends Controller
{
    public function index()
    {
        // Logika untuk menampilkan dashboard
        $ppdb = Ppdb::first();

        return view('ppdb',compact('ppdb'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        
            'photo' => 'nullable|mimes:jpg,png,jpeg|max:2048',
           
        ]);
    
        $ppdb = Ppdb::findOrFail($id);
    
        // Jika ada file foto yang diupload
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/ppdb', $fileName); // Menyimpan di storage/app/public/photos
            $ppdb->photo = $fileName; // Simpan nama file di database
        }
    
        $ppdb->update($request->except('photo')); // Update data kecuali foto
    
        return redirect()->route('admin.ppdb')->with('success', 'Data PPDB updated successfully');
    }
}

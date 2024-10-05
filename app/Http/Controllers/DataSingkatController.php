<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSingkat;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DataSingkatController extends Controller
{
    public function index()
    {
        $datasingkat = DataSingkat::first(); // Ambil satu data dari tabel
    return view('datasingkat', compact('datasingkat'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'siswa' => 'required|integer|min:0',
            'guru' => 'required|integer|min:0',
            'tenagakependidikan' => 'required|integer|min:0',
        ]);
    
        $datasingkat = DataSingkat::findOrFail($id);
    
        $datasingkat->update($request->only(['siswa', 'guru', 'tenagakependidikan']));
    
        return redirect()->route('admin.datasingkat')->with('success', 'Data updated successfully');
    }

}

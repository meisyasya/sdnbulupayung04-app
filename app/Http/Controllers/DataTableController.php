<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
class DataTableController extends Controller
{
    public function clientside(Request $request){
        $data = new  Siswa;
        if($request->get('search')){
            
        }
    }
}

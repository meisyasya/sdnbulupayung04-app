<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    
    if (auth()->user()->role == 1) {
        $users = User::get(); // Mengambil semua users jika role == 1 (misalnya Admin)
    } else {
        $users = User::whereId(auth()->user()->id)->get(); // Hanya mengambil user yang sedang login
    }

    return view('berita.users.index', [
        'users' => $users
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt('$data[password]');
        User::create($data);
        return back()->with('success','User berhasil di buat');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $data = $request->validated();
        if($data['password'] !=''){
            $data['password'] = bcrypt($data['password']);
            User::find($id)->update($data);  
        }else{
            User::find($id)->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }
        return back()->with('success','User berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return back()->with('success','User Berhasil di Hapus');
    }
}

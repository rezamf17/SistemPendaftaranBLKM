<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view ('admin.KelolaAkun', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validator = Validator::make($request->all(), [
        'name' => 'required',
        'phone' => 'required|unique:users,phone',
        'role' => 'required',
        'password' => 'required|min:6|confirmed'
        ]);

        if ($validator->fails()) {
         return redirect('KelolaAkun')->with('warning', 'Data Akun Gagal Ditambahkan!');
        }

        if ($request->role == 1) {
            $user = new User;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->status = '';
            $user->save();
        }else{
            $user = new User;
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->status = 'Calon Peserta';
            $user->save();
        }
        

        return redirect('KelolaAkun')->with('success', 'Data Akun Berhasil Ditambahkan!');
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        return view('admin.EditAkun', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required',
        'phone' => 'required',
        'role' => 'required',
        'status' => 'required',
        'password' => 'confirmed'
        ]);

        if ($validator->fails()) {
         return redirect('KelolaAkun')->with('warning', 'Data Akun Gagal Diedit!');
        }

        if ($request->password == null) {
            $users = User::find($id);
            $users->name = $request->name;
            $users->phone = $request->phone;
            $users->role = $request->role;
            $users->status = $request->status;

        }else {
            $users = User::find($id);
            $users->name = $request->name;
            $users->phone = $request->phone;
            $users->role = $request->role;
            $users->status = $request->status;
            $users->password = Hash::make($request->password);
        }
        $users->save();
        // return $users;

        return redirect('KelolaAkun')->with('success', 'Data Akun Berhasil Update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('KelolaAkun')->with('success', 'Data Akun Berhasil Dihapus!');
    }
}

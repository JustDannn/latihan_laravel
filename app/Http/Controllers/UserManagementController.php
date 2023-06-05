<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserManagement;

use DB;

class UserManagementController extends Controller
{
    public function index()
    {
        $User = DB::table('usermanagement')->get();
        return view('User.index', ['User'=>$User]);
    }

    public function create()
    {
        return view('User.create');
    }

    public function store(Request $request)
    {
        DB::table('usermanagement')->insert([
            'nama' => $request -> nama,
            'alamat' => $request -> alamat,
            'tempat_lahir' => $request -> tempat_lahir,
            'tgl_lahir' => $request -> tgl_lahir,
            'no_telpon' => $request -> no_telpon
        ]);

        return redirect('User') -> with('status', 'Data berhasil di tambah!');
    }

    public function edit($id)
    {
        $User = DB::table('usermanagement')->where('id',$id)->first();
        return view('User/edit', compact('User'));
    }

    public function update(Request $request,$id)
    {
        DB::table('usermanagement')->where('id',$id)->update([
            'nama' => $request -> nama,
            'alamat' => $request -> alamat,
            'tempat_lahir' => $request -> tempat_lahir,
            'tgl_lahir' => $request -> tgl_lahir,
            'no_telpon' => $request -> no_telpon
        ]);
    }

    public function delete($id)
    {
        DB::table('usermanagement')->where('id',$id)->delete();
        return redirect('User') -> with('status', 'Data berhasil di Hapus!');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;

use DB;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Billing::all();
        return view("billing/index", compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table = Billing::all();
        return view("billing/create", compact('table'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = new Billing;

        $add->kode_bayar = $request->kode_bayar;
        $add->nama_cust = $request->nama_cust;
        $add->alamat_cust = $request->alamat_cust;
        $add->tagihan = $request->tagihan;
        $add->total_bayar = $request->total_bayar;
        $add->kembalian = $request->kembalian;

        $add->save();
        return redirect('bill')->with('status', 'Berhasil');

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
     $User = DB::table('billing')->where('id',$id)->first();
        return view('bill/edit', compact('bill'));
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
            DB::table('billing')->where('id',$id)->update([
            'kode_bayar	' => $request -> kode_bayar	,
            'nama_cust' => $request -> nama_cust,
            'alamat_cust' => $request -> alamat_cust,
            'tgl_bayar' => $request -> tgl_bayar,
            'tagihan' => $request -> tagihan,
            'total_bayar' => $request -> total_bayar,
            'kembalian' => $request -> kembalian,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('billing')->where('id',$id)->delete();
        return redirect('bill') -> with('status', 'Data berhasil di Hapus!');
    }
}

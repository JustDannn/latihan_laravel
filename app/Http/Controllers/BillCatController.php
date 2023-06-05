<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillCat;

use DB;

class BillCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = BillCat::all();
        return view("BillCat/index", compact('table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table = BillCat::all();
        return view("BillCat/create", compact('table'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = new BillCat;

        $add->Id_Category = $request->Id_Category;
        $add->Nama_Category = $request->Nama_Category;
        $add->Value = $request->Value;
        $add->save();
        return redirect('BillCat')->with('status', 'Berhasil');

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
     $table = DB::table('BillCat')->where('id',$id)->first();
        return view('BillCat/edit', compact('table'));
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
            DB::table('BillCat')->where('id',$id)->update([
            'Id_category' => $request -> Id_category,
            'Nama_Category' => $request -> Nama_Category,
            'Value' => $request -> Value,
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
        DB::table('BillCat')->where('id',$id)->delete();
        return redirect('BillCat') -> with('status', 'Data berhasil di Hapus!');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mhs;
use App\Prodi;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Mhs::all();
        return view('tables')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Mhs();
        $data->NIM = $request->NIM;
        $data->Nama = $request->nama;
        $data->Alamat = $request->alamat;
        $data->Prodi_id = $request->prodi;
        $data->save();
        return redirect('/mhs');
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
        //
        $data= Mhs::where('id', $id)->firstOrFail();
        return view('view')->with('data', $data);
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
        //
        $data = Mhs::where('id',$id)->firstOrFail();
        $data->NIM = $request->NIM;
        $data->Nama = $request->nama;
        $data->Alamat = $request->alamat;
        $data->Prodi_id = $request->prodi;
        $data->save();
        return redirect('/mhs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Mhs::where('id',$id)->firstOrFail();
        $data->delete();
        return redirect('/mhs');
    }
}

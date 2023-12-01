<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
         return view('admin.mahasiswa.index',['mahasiswa'=>$mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'    => 'required',
            'jenkel'  => 'required',
            'alamat'  => 'required',
            'hp'      => 'required',
            'jurusan' => 'required',
            'email'   => 'required',
        ]);

        Mahasiswa::create([
            'nama'    => $request->nama,
            'jenkel'  => $request->jenkel,
            'alamat'  => $request->alamat,
            'hp'      => $request->hp,
            'jurusan' => $request->jurusan,
            'email'   => $request->email,
        ]);
        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

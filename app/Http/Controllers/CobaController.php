<?php

namespace App\Http\Controllers;

use App\Models\Coba;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    function db(){
        
        return view('dashboards.cobas.index');
    } 

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dataCoba = Coba::all();
        return view('dashboards.cobas.datacoba',compact('dataCoba'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.cobas.createcoba');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nm = $request->profilepicture;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Coba;
        
        $dtUpload->profilepicture = $namaFile;
        $dtUpload->fullname = $request->fullname;
        $dtUpload->jobposition = $request->jobposition;
        // $dtUpload->description = $request->description;
        $dtUpload->instagramlink = $request->instagramlink;
        $dtUpload->linkedinlink = $request->linkedinlink;

        $nm->move(public_path().'/cobaimg', $namaFile);
        $dtUpload->save();

        return redirect('dataabout')->with('success', 'Data Berhasil Tersimpan!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get post by ID
        $cobapage = Coba::findOrFail($id);

        //render view with post
        return view('dashboards.cobas.showcoba', compact('cobapage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dt = Coba::findorfail($id);
        return view('dashboards.cobas.editcoba',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ubah = Coba::findorfail($id);
        $awal = $ubah->profilepicture;

        $dt = [
            'fullname' => $request['fullname'],
            'jobposition' => $request['jobposition'],
            // 'description' => $request['description'],
            'instagramlink' => $request['instagramlink'],
            'linkedinlink' => $request['linkedinlink'],
            'profilepicture' => $awal,

        ];
        $request->profilepicture->move(public_path().'/cobaimg', $awal);
        $ubah->update($dt);
        return redirect('dataabout')->with('success', 'Data Berhasil Di update!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Coba::findorfail($id);

        $file = public_path('/cobaimg/').$delete->profilepicture;
        //cek jika ada gambar
        if(file_exists($file)){
            //maka hapus file folder public /img
            @unlink($file);
        }
        //hapus data di database
        $delete->delete();
        return back()->with('info','Data berhasil dihapus');

    }
    


}

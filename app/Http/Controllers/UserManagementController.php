<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserManagement;

class UserManagementController extends Controller
{
    function db(){
        
        return view('dashboards.usermanagements.index');
    } 

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dataProject = UserManagement::all();
        return view('dashboards.usermanagements.datausermanagement',compact('dataProject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.usermanagements.createusermanagement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nm = $request->profilepicture;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new UserManagement;
        
        $dtUpload->profilepicture = $namaFile;
        $dtUpload->userproject = $request->userproject;
        $dtUpload->userid = $request->userid;
        $dtUpload->username = $request->username;
        $dtUpload->email = $request->email;
        $dtUpload->phone = $request->phone;

        $nm->move(public_path().'/usermanagementimg', $namaFile);
        $dtUpload->save();

        return redirect('datausermanagement')->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // //get post by ID
        // $projectpage = UserManagement::findOrFail($id);

        // //render view with post
        // return view('dashboards.usermanagements.showproject', compact('projectpage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dt = UserManagement::findorfail($id);
        return view('dashboards.usermanagements.editusermanagement',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ubah = UserManagement::findorfail($id);
        $awal = $ubah->profilepicture;

        $dt = [
            'profilepicture' => $request['profilepicture'],
            'userproject' => $request['userproject'],
            'userid' => $request['userid'],
            'username' => $request['username'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'profilepicture' => $awal,

        ];
        $request->profilepicture->move(public_path().'/usermanagementimg', $awal);
        $ubah->update($dt);
        return redirect('datausermanagement')->with('success', 'Data Berhasil Di update!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = UserManagement::findorfail($id);

        $file = public_path('/usermanagementimg/').$delete->profilepicture;
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

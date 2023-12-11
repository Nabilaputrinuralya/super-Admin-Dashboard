<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function lp(){
        
        return view('dashboards.navbars.lp');
    } 
    

    public function db(){
        
        return view('dashboards.navbars.index');
    } 
    

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dataNavbar = Navbar::all();
        return view('dashboards.navbars.datanavbar',compact('dataNavbar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.navbars.createnavbar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nm = $request->websitelogo;
        $namaFile = 'UIMG_'.date('Ymd').uniqid().'.jpg';

        $dtUpload = new Navbar;
        
        $dtUpload->websitelogo = $namaFile;
        

        $nm->move(public_path().'/navbarimg', $namaFile);
        $dtUpload->save();

        return redirect('datanavbar')->with('success', 'Data Changed Successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get post by ID
        $navbarpage = Navbar::findOrFail($id);

        //render view with post
        return view('dashboards.navbars.shownavbar', compact('navbarpage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dt = Navbar::findorfail($id);
        return view('dashboards.navbars.editnavbar',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi form untuk file gambar
        $request->validate([
            'websitelogo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'websitelogo.image' => 'The file must be an image.',
            'websitelogo.mimes' => 'Image format must be jpeg, png, jpg, gif, or svg.',
        ]);

        $ubah = Navbar::findorfail($id);
        $awal = $ubah->websitelogo;

        $dt = [
            'websitelogo' => $awal,

        ];
        $request->websitelogo->move(public_path().'/navbarimg', $awal);
        $ubah->update($dt);
        return redirect('datanavbar')->with('success', 'Data Updated Successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Navbar::findorfail($id);

        $file = public_path('/navbarimg/').$delete->websitelogo;
        //cek jika ada gambar
        if(file_exists($file)){
            //maka hapus file folder public /img
            @unlink($file);
        }
        //hapus data di database
        $delete->delete();
        return back()->with('info','Data Deleted Successfully');

    }
    


}

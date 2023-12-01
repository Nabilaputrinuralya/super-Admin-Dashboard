<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    function db(){
        
        return view('dashboards.footers.index');
    } 

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dataFooter = Footer::all();
        return view('dashboards.footers.datafooter',compact('dataFooter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.footers.createfooter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nm = $request->websitelogo;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Footer;
        
        $dtUpload->websitelogo = $namaFile;
        $dtUpload->locationaddress = $request->locationaddress;
        $dtUpload->copyrightpage = $request->copyrightpage;
        $dtUpload->privacypolicypage = $request->privacypolicypage;
        $dtUpload->termsofusepage = $request->termsofusepage;
        $dtUpload->copyright = $request->copyright;

        $nm->move(public_path().'/footerimg', $namaFile);
        $dtUpload->save();

        return redirect('datafooter')->with('success', 'Data Berhasil Tersimpan!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // //get post by ID
        $footerpage = Footer::findOrFail($id);

        // //render view with post
        return view('dashboards.footers.showfooter', compact('footerpage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dt = Footer::findorfail($id);
        return view('dashboards.footers.editfooter',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ubah = Footer::findorfail($id);

        // Memeriksa apakah ada file gambar yang diunggah
        if ($request->hasFile('websitelogo')) {
            // Validasi form untuk file gambar
            $request->validate([
                'websitelogo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'websitelogo.image' => 'The file must be an image.',
                'websitelogo.mimes' => 'Image format must be jpeg, png, jpg, gif, or svg.',
            ]);
    
            // Proses penyimpanan file gambar
            $nm = $request->websitelogo;
            $namaFile = $nm->getClientOriginalName();
            $nm->move(public_path().'/footerimg ', $namaFile);
    
            // Update data dengan file gambar baru
            $dt = [
                'locationaddress' => $request['locationaddress'],
                'copyrightpage' => $request['copyrightpage'],
                'privacypolicypage' => $request['copyrightpage'],
                'termofusepage' => $request['termofusepage'],
                'copyright' => $request['copyright'],
                'websitelogo' => $namaFile,
            ];
        } else {
            // Update data tanpa mengubah file gambar
            $dt = [
                'locationaddress' => $request['locationaddress'],
                'copyrightpage' => $request['copyrightpage'],
                'privacypolicypage' => $request['copyrightpage'],
                'termofusepage' => $request['termofusepage'],
                'copyright' => $request['copyright'],
                
            ];
        }
    
        $ubah->update($dt);
        return redirect('datafooter')->with('success', 'Data Berhasil Di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = footer::findorfail($id);

        $file = public_path('/footerimg/').$delete->websitelogo;
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

<?php

namespace App\Http\Controllers;

use App\Models\ProjectPage;
use Illuminate\Http\Request;

class ProjectPageController extends Controller
{
    function db(){
        
        return view('dashboards.projects.index');
    } 

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dataProject = ProjectPage::all();
        return view('dashboards.projects.dataproject',compact('dataProject'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.projects.createproject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nm = $request->projectimage;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new ProjectPage;
        
        $dtUpload->projectimage = $namaFile;
        $dtUpload->projectname = $request->projectname;
        $dtUpload->projectdescription = $request->projectdescription;

        $nm->move(public_path().'/projectimg', $namaFile);
        $dtUpload->save();

        return redirect('dataproject')->with('success', 'Data Berhasil Tersimpan!');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get post by ID
        $projectpage = ProjectPage::findOrFail($id);

        //render view with post
        return view('dashboards.projects.showproject', compact('projectpage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dt = Projectpage::findorfail($id);
        return view('dashboards.projects.editproject',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ubah = Projectpage::findorfail($id);
        $awal = $ubah->projectimage;

        $dt = [
            'projectname' => $request['projectname'],
            'projectdescription' => $request['projectdescription'],
            'projectimage' => $awal,

        ];
        $request->projectimage->move(public_path().'/projectimg', $awal);
        $ubah->update($dt);
        return redirect('dataproject')->with('success', 'Data Berhasil Di update!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Projectpage::findorfail($id);

        $file = public_path('/projectimg/').$delete->projectimage;
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

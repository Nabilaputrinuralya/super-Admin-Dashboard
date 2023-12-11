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
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
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
        // Validasi form
        $request->validate([
            'projectname' => 'required',
            'projectdescription' => 'required',
            // 'projectdetails' => 'required',
            'projectimage' => 'required',
            
        ], [
            'projectname.required' => 'The project name field is requiredi.',
            'projectdescription.required' => 'The project description field is required.',
            // 'projectdetails.required' => 'The project detail field is required.',
            'projectimage.required' => 'Profile picture must be uploaded.',
            'projectimage.image' => 'The file must be an image.',
            'projectimage.mimes' => 'Image format must be jpeg, png, jpg, gif, or svg.',
        ]);

        $nm = $request->projectimage;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new ProjectPage;
        
        $dtUpload->projectimage = $namaFile;
        $dtUpload->projectname = $request->projectname;
        $dtUpload->projectdescription = $request->projectdescription;
        // $dtUpload->projectdetails = $request->projectdetails;

        $nm->move(public_path().'/projectimg', $namaFile);
        $dtUpload->save();

        return redirect('dataourproject')->with('success', 'Data Changed Successfully!');


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
        $ubah = ProjectPage::findorfail($id);

        // Memeriksa apakah ada file gambar yang diunggah
        if ($request->hasFile('projectimage')) {
            // Validasi form untuk file gambar
            $request->validate([
                'projectimage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'projectimage.image' => 'The file must be an image.',
                'projectimage.mimes' => 'Image format must be jpeg, png, jpg, gif, or svg.',
            ]);
    
            // Proses penyimpanan file gambar
            $nm = $request->projectimage;
            $namaFile = $nm->getClientOriginalName();
            $nm->move(public_path().'/projectimg ', $namaFile);
    
            // Update data dengan file gambar baru
            $dt = [
                'projectname' => $request['projectname'],
                'projectdescription' => $request['projectdescription'],
                // 'projectdetails' => $request['projectdetails'],
                'projectimage' => $namaFile,
            ];
        } else {
            // Update data tanpa mengubah file gambar
            $dt = [
                'projectname' => $request['projectname'],
                'projectdescription' => $request['projectdescription'],
                // 'projectdetails' => $request['projectdetails'],
                
            ];
        }
    
        $ubah->update($dt);
        return redirect('dataourproject')->with('success', 'Data Updated Successfully!');
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
        return back()->with('info','Data Deleted Successfully');

    }
    


}

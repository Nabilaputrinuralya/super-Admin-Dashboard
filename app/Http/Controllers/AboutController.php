<?php

namespace App\Http\Controllers;

use App\Models\AboutTeam;
use Illuminate\Http\Request;
use App\Models\AboutDescription;

class AboutController extends Controller
{
    function db(){
        
        return view('dashboards.abouts.indexabout');
    } 

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dataAboutDescription = AboutDescription::all();
        $dataAboutTeam = AboutTeam::all();
        $title = 'Delete User!';$text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('dashboards.abouts.dataabout',compact('dataAboutDescription','dataAboutTeam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createaboutdescription()
    {
        return view('dashboards.abouts.createaboutDescription');
    }

     /**
     * Show the form for creating a new resource.
     */
    public function createaboutteam()
    {
        return view('dashboards.abouts.createaboutteam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeaboutdescription(Request $request)
    {

        $dtUpload = new AboutDescription;
        
       
        $dtUpload->description = $request->description;
       

        $dtUpload->save();

        return redirect('dataabout')->with('success', 'Data Changed Successfully!');


    }

     /**
     * Store a newly created resource in storage.
     */
    public function storeaboutteam(Request $request)
    {
        // Validasi form
        $request->validate([
            'fullname' => 'required',
            'jobposition' => 'required',
            'instagramlink' => 'required',
            'linkedinlink' => 'required',
            'profilepicture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'fullname.required' => 'The fullname field is required',
            'jobposition.required' => 'The job positon field is required',
            'instagramlink.required' => 'Instagram link is required.',
            'linkedinlink.required' => 'Linkedin link is required.',
            'profilepicture.required' => 'Profile picture must be uploaded.',
            'profilepicture.image' => 'The file must be an image.',
            'profilepicture.mimes' => 'Image format must be jpeg, png, jpg, gif, or svg.',
        ]);

        // Logika penyimpanan data jika validasi berhasil
        $nm = $request->profilepicture;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new AboutTeam;
        $dtUpload->profilepicture = $namaFile;
        $dtUpload->fullname = $request->fullname;
        $dtUpload->jobposition = $request->jobposition;
        $dtUpload->instagramlink = $request->instagramlink;
        $dtUpload->linkedinlink = $request->linkedinlink;

        $nm->move(public_path().'/aboutimg', $namaFile);
        $dtUpload->save();

        return redirect('dataabout')->with('success', 'Data Changed Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // //get post by ID
        // $projectpage = AboutTeam::findOrFail($id);

        // //render view with post
        // return view('dashboards.abouts.showproject', compact('projectpage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editaboutdescription($id)
    {
        $dt = AboutDescription::findorfail($id);
        return view('dashboards.abouts.editaboutdescription',compact('dt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editaboutteam($id)
    {
        $dt = AboutTeam::findorfail($id);
        return view('dashboards.abouts.editaboutteam',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateaboutdescription(Request $request, string $id)
    {
        $ubah = AboutDescription::findorfail($id);

        $dt = [
            'description' => $request['description'],
            
        ];
        $ubah->update($dt);
       return redirect('dataabout')->with('success', 'Data Updated Successfully!');
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateaboutteam(Request $request, string $id)
    {
        $ubah = AboutTeam::findorfail($id);

        // Memeriksa apakah ada file gambar yang diunggah
        if ($request->hasFile('profilepicture')) {
            // Validasi form untuk file gambar
            $request->validate([
                'profilepicture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'profilepicture.image' => 'The file must be an image.',
                'profilepicture.mimes' => 'Image format must be jpeg, png, jpg, gif, or svg.',
            ]);
    
            // Proses penyimpanan file gambar
            $nm = $request->profilepicture;
            $namaFile = $nm->getClientOriginalName();
            $nm->move(public_path().'/aboutimg', $namaFile);
    
            // Update data dengan file gambar baru
            $dt = [
                'fullname' => $request['fullname'],
                'jobposition' => $request['jobposition'],
                'instagramlink' => $request['instagramlink'],
                'linkedinlink' => $request['linkedinlink'],
                'profilepicture' => $namaFile,
            ];
        } else {
            // Update data tanpa mengubah file gambar
            $dt = [
                'fullname' => $request['fullname'],
                'jobposition' => $request['jobposition'],
                'instagramlink' => $request['instagramlink'],
                'linkedinlink' => $request['linkedinlink'],
            ];
        }
    
        $ubah->update($dt);
        return redirect('dataabout')->with('success', 'Data Updated Successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroyaboutdescription(string $id)
    {
        $delete = AboutDescription::findorfail($id);

        //hapus data di database
        $delete->delete();
        return back()->with('info','Data Deleted Successfully');

    }
    
     /**
     * Remove the specified resource from storage.
     */
    public function destroyaboutteam(string $id)
    {
        $delete = AboutTeam::findorfail($id);

        $file = public_path('/aboutimg/').$delete->profilepicture;
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

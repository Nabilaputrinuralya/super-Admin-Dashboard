<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Models\ProjectManagement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProjectManagementController extends Controller
{
    function db(){
        
        return view('dashboards.projectmanagements.index');
    } 

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dataPms = ProjectManagement::all();
        return view('dashboards.projectmanagements.dataprojectmanagement',compact('dataPms'))->with('success, project created successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.projectmanagements.createprojectmanagement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $projectname = $request->projectname;
        $projectuser = $request->projectuser;
        $projectdeadline = $request->projectdeadline;
        $project_id = Helper::IDGenerator(new ProjectManagement, 'project_id', 5, 'VQTQ');

        // $q = new ProjectManagement;
        // $q->project_id = $project_id;
        // $q->projectname = $projectname;
        // $q->projectuser = $projectuser;
        // $q->projectdeadline = $projectdeadline;
        // $q->save();

        $new_project = DB::table('project_management')->insertGetId([
            'project_id' => $project_id,
            'projectname' => $projectname,
            'projectuser' => $projectuser,
            'projectdeadline' => $projectdeadline,
        ]);

        if ($new_project) {
            // clone dashboard
            $sourceFolder = 'F:/project-laravel/Dashboard/template';
            $destination = 'F:/project-laravel/Dashboard';
            $name = $request->input('projectname');
            $destinationFolder = $destination . '/' . $name;

            if (File::isDirectory($sourceFolder)) {
                // Check if the source folder exists
                if (!File::isDirectory($destinationFolder)) {
                    // Create the destination folder if it doesn't exist
                    File::makeDirectory($destinationFolder, 0755, true); // Change permissions as needed
    
                    // Copy the contents recursively
                    File::copyDirectory($sourceFolder, $destinationFolder);
    
                    Session::flash('success', 'Folder "' . $name . '" created successfully!');
                    return redirect()->route('datapms')->with('success','Project created successfully.');;
                } else {
                    Session::flash('error', 'Folder "' . $name . '" already exists!');
                    return redirect()->route('datapms')->with('error','Folder already exists!');;
                }
            } else {
                Session::flash('error', 'Source folder does not exist!');
                return redirect()->route('datapms')->with('success','Source folder does not exists!');;
            }
        }

        // return back()->with('success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // //get post by ID
        // $pmspage = ProjectManagement::findOrFail($id);

        // //render view with post
        // return view('dashboards.dataprojectmanagement.showpms', compact('pmspage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dt = ProjectManagement::findorfail($id);
        return view('dashboards.projectmanagements.editprojectmanagement',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ubah = ProjectManagement::findorfail($id);

        $dt = [
            'project_id' => $request['project_id'],
            'projectname' => $request['projectname'],
            'projectuser' => $request['projectuser'],
            'projectdeadline' => $request['projectdeadline'],

        ];
        $ubah->update($dt);
        return redirect('dataprojectmanagement')->with('success', 'Data Berhasil Di update!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = ProjectManagement::findorfail($id);

        //hapus data di database
        $delete->delete();
        return back()->with('info','Data berhasil dihapus');

    }

    public function createDashboard()
    {
        return view('dashboards.projectmanagements.createdashboard');
    }
    
    public function storeDashboard(Request $request)
    {
        $sourceFolder = 'F:/project-laravel/Dashboard/template';
        $destination = 'F:/project-laravel/Dashboard';
        $name = $request->input('projectname');
        $destinationFolder = $destination . '/' . $name;

        if (File::isDirectory($sourceFolder)) {
            // Check if the source folder exists
            if (!File::isDirectory($destinationFolder)) {
                // Create the destination folder if it doesn't exist
                File::makeDirectory($destinationFolder, 0755, true); // Change permissions as needed

                // Copy the contents recursively
                File::copyDirectory($sourceFolder, $destinationFolder);

                Session::flash('success', 'Folder "' . $destinationFolder . '" created successfully!');
                return response()->json(['success' => true]);
                // return response()->alert('Folder cloned successfully');
            } else {
                Session::flash('error', 'Folder "' . $destinationFolder . '" already exists!');
                return response()->json(['success' => false]);
                // return response()->alert('Destination folder already exists');
            }
        } else {
            Session::flash('error', 'Folder "' . $sourceFolder . '" does not exist!');
            return response()->json(['success' => false]);
            // return response()->alert('Source folder does not exist');
        }
    }

}

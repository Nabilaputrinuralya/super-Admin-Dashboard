<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    function db(){
        
        return view('dashboards.homes.indexhome');
    } 

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $dataHome = Home::all();
        return view('dashboards.homes.datahome',compact('dataHome'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.homes.createhome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'websitelogo'  => 'required',
            'websiteimage'    => 'required',
            'greetingsword'  => 'required',
            'websitedescription'      => 'required',
            
           
        ]);

        Home::create([
            'websitelogo'  => $request->websitelogo,
            'websiteimage'    => $request->websiteimage,
            'greetingsword'  => $request->greetingsword,
            'websitedescription'      => $request->websitedescription,
           
        ]);

        $message = Home::create($request->all());
        if($request->hasFile('websitelogo')) {
            $request->file('websitelogo')->move('homeimg/',$request->file('websitelogo')->getClientOriginalName());
            $message->websiteimage = $request->file('websitelogo')->getClientOriginalName();
            $message->save();
        }
        if($request->hasFile('websiteimage')) {
            $request->file('websiteimage')->move('homeimg/',$request->file('websiteimage')->getClientOriginalName());
            $message->websiteimage = $request->file('websiteimage')->getClientOriginalName();
            $message->save();
        }

       
        return redirect('datahome');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // //get post by ID
        // $messagepage = Home::findOrFail($id);

        // //render view with post
        // return view('dashboards.homes.showmessage', compact('messagepage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dt = Home::findorfail($id);
        return view('dashboards.homes.edithome',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'websitelogo' => 'required',
            'websiteimage' => 'required',
            'greetingsword' => 'required',
            'websitedescription' => 'required',
        ]);
        $message = Home::find($id);
        $message->websitelogo = $request->websitelogo;
        $message->websiteimage = $request->websiteimage;
        $message->greetingsword = $request->greetingsword;
        $message->websitedescription = $request->websitedescription;
        // $message = message::create($request->all());
        if($request->hasFile('websitelogo')) {
            $request->file('websitelogo')->move('homeimg/',$request->file('websitelogo')->getClientOriginalName());
            $message->websitelogo = $request->file('websitelogo')->getClientOriginalName();
            // $message->save();
        }
        if($request->hasFile('websiteimage')) {
            $request->file('websiteimage')->move('homeimg/',$request->file('websiteimage')->getClientOriginalName());
            $message->websiteimage = $request->file('websiteimage')->getClientOriginalName();
            // $message->save();
        }
        $message->save();

        return redirect('/datahome');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Home::findorfail($id);

        //hapus data di database
        $delete->delete();
        return back()->with('info','Data berhasil dihapus');

    }

    
}
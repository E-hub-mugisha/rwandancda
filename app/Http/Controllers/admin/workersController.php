<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Worker;
use Illuminate\Http\Request;

class workersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = Worker::latest()->paginate(5);
    
        return view('admin.workers.index',compact('workers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'department' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($photo = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profilePhoto = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profilePhoto);
            $input['photo'] = "$profilePhoto";
        }
    
        Worker::create($input);
     
        return redirect()->route('workers')
                        ->with('success','Worker created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $worker = Worker::findOrFail($id);
        return view('admin.workers.show',compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $worker = Worker::findOrFail($id);
        return view('admin.workers.edit',compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function update(Request $request, $id)
    {
        $worker=Worker::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'department' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($photo = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profilePhoto = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profilePhoto);
            $input['photo'] = "$profilePhoto";
        }else{
            unset($input['photo']);
        }
          
        $worker->update($input);
    
        return redirect()->route('workers')
                        ->with('success','worker updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $worker=Worker::findOrFail($id);
        $worker->delete();
     
        return redirect()->route( 'workers')
                        ->with('success','worker deleted successfully');
    }
}

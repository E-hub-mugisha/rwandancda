<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Story;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::paginate(10);
        return view('admin.stories.index', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stories.create');
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
            'phone' => 'required',
            'disease' => 'required',
            'headline' => 'required',
            'content' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $storie = new Story();
        $storie->name = $request->input('name');
        $storie->phone = $request->input('phone');
        $storie->disease = $request->input( 'disease');
        $storie->headline = $request->input('headline');
        $storie->content = $request->input('content');
  
  
        if ($photo = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profilephoto = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profilephoto);
            $storie['photo'] = "$profilephoto";
        }
    
        $storie->save();
     
        return redirect()->route('stories')
                        ->with('success','story created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $story = Story::findOrFail($id);
        return view('admin.stories.show',compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $story = Story::findOrFail($id);
        return view('admin.stories.edit',compact('story'));
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
        $storie=Story::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'disease' => 'required',
            'headline' => 'required',
            'content' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $storie = new Story();
        $storie->name = $request->input('name');
        $storie->phone = $request->input('phone');
        $storie->disease = $request->input( 'disease');
        $storie->headline = $request->input('headline');
        $storie->content = $request->input('content');
  
  
        if ($photo = $request->file('photo')) {
            $destinationPath = 'photo/';
            $profilephoto = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profilephoto);
            $storie['photo'] = "$profilephoto";
        }
    
        $storie->update();
     
        return redirect()->route('stories')
                        ->with('success','story updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $storie=Story::findOrFail($id);
        $storie->delete();
     
        return redirect()->route( 'stories')
                        ->with('success','Story deleted successfully');
    }
}

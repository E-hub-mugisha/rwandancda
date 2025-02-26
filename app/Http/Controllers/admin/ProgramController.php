<?php

namespace App\Http\Controllers\admin;

use App\Engagement;
use App\Http\Controllers\Controller;
use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::latest()->paginate(5);
    
        return view('admin.programs.index',compact('programs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $engagements = Engagement::all();
        return view('admin.programs.create', compact('engagements'));
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
            'title' => 'required',
            'content' => 'required',
            'engagement'=>'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $program = new Program();
        $program->title = $request->input('title');
        $program->engagement = $request->input('engagement');
        $program->content = $request->input('content');
  
  
        if ($poster = $request->file('poster')) {
            $destinationPath = 'program/';
            $profilePoster = date('YmdHis') . "." . $poster->getClientOriginalExtension();
            $poster->move($destinationPath, $profilePoster);
            $program['poster'] = "$profilePoster";
        }
    
        $program->save();
     
        return redirect()->route('programs')
                        ->with('success','program created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $program = Program::findOrFail($id);
        return view('admin.programs.show',compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::findOrFail($id);
        $engagements = Engagement::all();
        return view('admin.programs.edit',compact('program','engagements'));
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
        $program = Program::findOrFail($id);
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'engagement'=>'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $program->title = $request->input('title');
        $program->engagement = $request->input('engagement');
        $program->content = $request->input('content');
  
  
        if ($poster = $request->file('poster')) {
            $destinationPath = 'program/';
            $profilePoster = date('YmdHis') . "." . $poster->getClientOriginalExtension();
            $poster->move($destinationPath, $profilePoster);
            $program['poster'] = "$profilePoster";
        }
    
        $program->update();
     
        return redirect()->route('programs')
                        ->with('success','program created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $program = Program::findOrFail($id);
        $program->delete();
     
        return redirect()->route( 'programs')
                        ->with('success','program deleted successfully');
    }
}

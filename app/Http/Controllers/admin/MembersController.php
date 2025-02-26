<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::latest()->paginate(5);
    
        return view('admin.members.index',compact('members'))
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
            'website' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($logo = $request->file('logo')) {
            $destinationPath = 'logo/';
            $profilelogo = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $profilelogo);
            $input['logo'] = "$profilelogo";
        }
    
        Member::create($input);
     
        return redirect()->route('members')
                        ->with('success','member created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $member = Member::findOrFail($id);
        return view('admin.members.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.members.edit',compact('member'));
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
        $member=Member::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'website' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($logo = $request->file('logo')) {
            $destinationPath = 'logo/';
            $profilelogo = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $profilelogo);
            $input['logo'] = "$profilelogo";
        }else{
            unset($input['logo']);
        }
          
        $member->update($input);
    
        return redirect()->route('members')
                        ->with('success','member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $member=Member::findOrFail($id);
        $member->delete();
     
        return redirect()->route( 'members')
                        ->with('success','member deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::paginate(10);
        return view('admin.partners.index', compact('partners'));
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
            'type' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $partner = new Partner();
        $partner->name = $request->input('name');
        $partner->type = $request->input('type');


        if ($logo = $request->file('logo')) {
            $destinationPath = 'logo/';
            $profileLogo = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $profileLogo);
            $partner['logo'] = "$profileLogo";
        }

        $partner->save();

        return redirect()->route('partners')
            ->with('success', 'Partner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partners.show',compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partners.edit',compact('partner'));
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
        $partner=Partner::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $partner->name = $request->input( 'name');
        $partner->type = $request->input('type');
  
  
        if ($logo = $request->file('logo')) {
            $destinationPath = 'logo/';
            $profileLogo = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $profileLogo);
            $partner['logo'] = "$profileLogo";
        }
    
        $partner->update();
     
        return redirect()->route('partners')
                        ->with('success','partner created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner=Partner::findOrFail($id);
        $partner->delete();
     
        return redirect()->route( 'partners')
                        ->with('success','partner deleted successfully');
    }
}

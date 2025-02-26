<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\CarouselItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $items = CarouselItem::all();
        return view('admin.banners.index', compact('items'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|string|max:255',
            'image_path' => 'required|string|max:255',

        ]);
        if ($image_path = $request->file('image_path')) {
            $destinationPath = 'new/img/intro-carousel/';
            $profilePhoto = date('YmdHis') . "." . $image_path->getClientOriginalExtension();
            $image_path->move($destinationPath, $profilePhoto);
            $data['image_path'] = "new/img/intro-carousel/"."$profilePhoto";
        } 

        $data = $request->all();

        CarouselItem::create($data);

        return redirect()->route('banners.index')->with('success', 'Carousel Item created successfully.');
    }

    public function edit($id)
    {
        $item = CarouselItem::findOrFail($id);
        return view('admin.banners.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $carousel = CarouselItem::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|string|max:255',
            'image_path' => 'required|string|max:255',
        ]);

        $input = $request->all();

        if ($request->hasFile('image_path')) {
            if ($carousel->image_path) {
                Storage::disk('public/new/img/intro-carousel/')->delete($carousel->image_path);
            }
            $input['image_path'] = $request->file('image_path');
        } else {
            $input['image_path'] = $carousel->image_path;
        }

        $carousel->update($input);

        return redirect()->route('banners.index')->with('success', 'Carousel Item updated successfully.');
    }

    public function destroy($id)
    {
        $item = CarouselItem::findOrFail($id);
        $item->delete();

        return redirect()->route('banners.index')->with('success', 'Carousel Item deleted successfully.');
    }
}

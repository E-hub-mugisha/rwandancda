<?php

namespace App\Http\Controllers\admin;

use App\Calendar;
use App\Engagement;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Subscriber;
use App\Worker;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class AdminController extends Controller
{
    public function storeWorker(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'department' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($photo = $request->file('photo')) {
            $destinationPath = 'worker/';
            $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }

        Worker::create($input);

        return redirect()->route('admin.workers')
            ->with('success', 'Profile created successfully.');
    }

    public function UpdateWorker(Request $request, Worker $worker)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'department' => 'required',
        ]);

        $input = $request->all();

        if ($photo = $request->file('photo')) {
            $destinationPath = 'worker/';
            $profileImage = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        } else {
            unset($input['photo']);
        }

        $worker->update($input);

        return redirect()->route('admin.workers')
            ->with('success', 'Worker updated successfully');
    }


    public function destroy(Worker $worker)
    {
        $worker->delete();

        return redirect()->route('admin.workers')
            ->with('success', 'worker deleted successfully');
    }

    public function Engagements()
    {
        $engagements = Engagement::all();
        return view('admin.engagements.index', compact('engagements'));
    }
    public function EngagementAdd(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $input = $request->all();

        Engagement::create($input);

        return redirect()->route('engagements')
            ->with('success', 'Engagements updated successfully');
    }
    public function showEngagement($id)
    {

        $engagement = Engagement::findOrFail($id);
        //return response()->json(['msg'=>$engagement],200);
        return view('admin.engagements.show')->with('engagement', $engagement);
    }
    public function editEngagement($id, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data = Engagement::where('id', $id)->first();
        $data->update($request->all());

        return redirect()->route('engagements')
            ->with('success', 'Engagements updated successfully');
    }
    public function deleteEngagement($id)
    {
        $data = Engagement::findOrFail($id);
        $data->delete();

        return redirect()->route('engagements')
            ->with('success', 'Engagements deleted successfully');
    }

    public function Subscribers()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscribers.index', compact('subscribers'));
    }
    public function SubscriberAdd(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $input = $request->all();

        Subscriber::create($input);

        return redirect()->route('subscribers')
            ->with('success', 'Subscriber updated successfully');
    }
    public function showSubscriber($id)
    {

        $subscriber = Subscriber::findOrFail($id);
        return view('admin.subscribers.show')->with('subscriber', $subscriber);
    }
    public function editSubscriber($id, Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $data = Subscriber::where('id', $id)->first();
        $data->update($request->all());

        return redirect()->route('subscribers')
            ->with('success', 'subscribers updated successfully');
    }
    public function deleteSubscriber($id)
    {
        $data = Subscriber::findOrFail($id);
        $data->delete();

        return redirect()->route('subscribers')
            ->with('success', 'subscribers deleted successfully');
    }

    public function Gallery()
    {
        $galleries = Gallery::paginate(10);
        return view('admin.gallery.index', compact('galleries'));
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
    public function storeGallery(Request $request)
    {
        $request->validate([
            'event' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $galleries = new Gallery();
        $galleries->event = $request->input('event');


        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $partner['image'] = "$profileImage";
        }

        $galleries->save();

        return redirect()->route('galleries')
            ->with('success', 'galleries created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showGallery($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateGallery(Request $request, $id)
    {
        $gallery= Gallery::findOrFail($id);
        
        $request->validate([
            'event' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gallery->event = $request->input( 'event');
  
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $gallery['image'] = "$profileImage";
        }
    
        $gallery->update();
     
        return redirect()->route('galleries')
                        ->with('success','gallery created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyGallery($id)
    {
        $galleries= Gallery::findOrFail($id);
        $galleries->delete();
     
        return redirect()->route( 'galleries')
                        ->with('success','galleries deleted successfully');
    }

    public function Category()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    public function CategoryAdd(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $input = $request->all();

        Category::create($input);

        return redirect()->route('categories')
            ->with('success', 'categories updated successfully');
    }
    public function showCategory($id)
    {

        $category = Category::findOrFail($id);
        return view('admin.categories.show')->with('category', $category);
    }
    public function editCategory($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $data = Category::where('id', $id)->first();
        $data->update($request->all());

        return redirect()->route('categories')
            ->with('success', 'categories updated successfully');
    }
    public function deleteCategory($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();

        return redirect()->route('categories')
            ->with('success', 'categories deleted successfully');
    }

    public function Calendars()
    {
        $calendars = Calendar::all();
        return view('admin.calendars.index', compact('calendars'));
    }
    public function CalendarAdd(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'year' => 'required'
        ]);

        $input = $request->all();

        Calendar::create($input);

        return redirect()->route('calendars')
            ->with('success', 'Calendar updated successfully');
    }
    public function showCalendar($id)
    {

        $calendar = Calendar::findOrFail($id);
        return view('admin.calendars.show')->with('calendar', $calendar);
    }
    public function editCalendar($id, Request $request)
    {
        $request->validate([
            'file' => 'required',
            'year' => 'required'
        ]);

        $data = Calendar::where('id', $id)->first();
        $data->update($request->all());

        return redirect()->route('calendars')
            ->with('success', 'calendars updated successfully');
    }
    public function deleteCalendar($id)
    {
        $data = Calendar::findOrFail($id);
        $data->delete();

        return redirect()->route('calendars')
            ->with('success', 'calendars deleted successfully');
    }
}

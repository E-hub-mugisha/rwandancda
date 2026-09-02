<?php

namespace App\Http\Controllers;

use App\Models\Engagement;
use App\Models\Post;
use App\Model\Program;
use App\Model\Resource;
use App\Models\CarouselItem;
use App\Models\Gallery;
use App\Models\Member;
use App\Models\Partner;
use App\Models\Resource as ModelsResource;
use App\Models\Story;
use App\Models\Worker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stories = Story::latest()->take(3)->get();
        $partners = Partner::all();
        $groupFocus = Engagement::all();
        $engagements = Engagement::all();
        $data = Post::where('category_id', 1)->orderBy('created_at', 'desc')->take(6)->get();
        $featured = Post::where('category_id', 1)
            ->latest()
            ->take(1)->first();
        $resourcedata = ModelsResource::all()->take(3);
        $banners = CarouselItem::latest()->take(3)->get();
        $images = Gallery::latest()->take(10)->get();
        return view('home', ['featured' => $featured, 'banners' => $banners, 'images' => $images, 'stories' => $stories, 'groupFocus' => $groupFocus, 'engagements' => $engagements, 'partners' => $partners, 'posts' => $data, 'resources_data' => $resourcedata]);
    }

    public function about()
    {
        $engagements = Engagement::all();
        $members = Member::all();
        $workers = Worker::orderBy('created_at', 'desc')->get();
        return view('about', ['workers' => $workers, 'members' => $members, 'engagements' => $engagements]);
    }

    public function partnerships()
    {
        $engagements = Engagement::all();
        $partners = Partner::all();
        $founders = Member::where('category', 'founding')->get();
        $adherents = Member::where('category', 'adherent')->get();
        $affiliated = Member::where('category', 'affiliated')->get();
        return view('partnerships', compact('founders', 'adherents', 'affiliated', 'partners', 'engagements'));
    }

    public function team()
    {
        $engagements = Engagement::all();
        $members = Member::all();
        $workers = Worker::orderBy('created_at', 'desc')->get();
        return view('team_member', ['workers' => $workers, 'members' => $members, 'engagements' => $engagements]);
    }

    public function knowYourNumbers()
    {
        $engagements = Engagement::all();
        $members = Member::all();
        $workers = Worker::orderBy('created_at', 'desc')->get();
        return view('know_your_numbers', ['workers' => $workers, 'members' => $members, 'engagements' => $engagements]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $posts = Post::where('title', 'LIKE', "%$query%")
            ->orWhere('body', 'LIKE', "%$query%")
            ->get();

        $programs = Program::where('title', 'LIKE', "%$query%")
            ->orWhere('content', 'LIKE', "%$query%")
            ->get();

        $resources = Resource::where('title', 'LIKE', "%$query%")->get();

        $engagements = Engagement::all();
        return view('search', compact('posts', 'programs', 'resources', 'query', 'engagements'));
    }
}

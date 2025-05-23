<?php

namespace App\Http\Controllers;

use App\Engagement;
use App\Models\Post;
use App\Program;
use App\Resource;
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
        return view('home');
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

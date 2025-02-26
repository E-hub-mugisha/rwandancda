<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Resource;
use App\Story;
use App\Worker;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashoardController extends Controller
{
    //    
    public function index()
    {
        $totalPosts = Post::count();
        $totalWorkers = Worker::count();
        $resources = Resource::latest()->take(5)->get();
        $stories = Story::latest()->take(3)->get();
        $totalStory =  Story::count();

        
        return view('admin.dashboard', compact('totalPosts', 'totalWorkers', 'resources', 'stories', 'totalStory'));
    }
}

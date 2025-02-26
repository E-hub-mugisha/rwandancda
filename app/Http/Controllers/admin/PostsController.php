<?php

namespace App\Http\Controllers\admin;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
    
        return view('admin.posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
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
            'slug' => 'required',
            'title' => 'required',
            'status' => 'required',
            'featured' => 'required',
            'body' => 'required',
            'category_id'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new Post();
        $slugTitle = Str::slug($request->input("title"));
        $post->slug = $slugTitle;
        $post->author_id = Auth::user()->id;
        $post->category_id = $request->input('category_id');
        $post->status = $request->input( 'status');
        $post->title = $request->input('title');
        $post->featured = $request->input('featured');
        $post->body = $request->input('body');
  
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileimage);
            $post['image'] = "$profileimage";
        }
    
        $post->save();
     
        return redirect()->route('posts')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $post = Post::findOrFail($id);
        $slug = $post->slug;
        $comments_data = Comment::where('post', $slug)->get();
        return view('admin.posts.show',compact('post','comments_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.edit',compact('post','categories'));
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
        $post=Post::findOrFail($id);
        
        $request->validate([
            'slug' => 'required',
            'title' => 'required',
            'status' => 'required',
            'featured' => 'required',
            'body' => 'required',
            'category_id'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slugTitle = Str::slug($request->input("title"));
        $post->slug = $slugTitle;
        $post->author_id = Auth::user()->id;
        $post->category_id = $request->input('category_id');
        $post->status = $request->input( 'status');
        $post->title = $request->input('title');
        $post->featured = $request->input('featured');
        $post->body = $request->input('body');
  
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileimage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileimage);
            $post['image'] = "$profileimage";
        }
    
        $post->update();
     
        return redirect()->route('posts')
                        ->with('success','Post created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
     
        return redirect()->route( 'posts')
                        ->with('success','Post deleted successfully');
    }
    public function destroyComment( $id)
    {
        $comment=Comment::findOrFail($id);
        $comment->delete();
     
        return redirect()->route('posts')
                        ->with('success','comment deleted successfully');
    }
}
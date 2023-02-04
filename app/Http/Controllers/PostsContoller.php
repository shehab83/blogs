<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Comment;

use App\Http\Requests\PostRequest;
use App\Http\Requests\CommentRequest;

class PostsContoller extends Controller
{

    public function index()
    {
        return view('blog.index')->with('posts', Post::select()->orderby('id', 'DESC')->paginate(PAGINATION_COUNT));
    }

    public function create()
    {
        return view('blog.create');
    }


    public function store(PostRequest $request)
    {
        try {
            $slug = Str::slug($request->title, '-');

            $newImagename = uniqid() . '-' . $slug . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('image_path'), $newImagename);

            Post::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => $slug,
                'image_path' => $newImagename,
                'user_id' => auth()->user()->id
            ]);
            return redirect('/blog');
        } catch (\Exception $ex) {

            return redirect()->back()
                ->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()])
                ->withInput();
        }
    }

    public function show($slug)
    {
        $post = Post::with([
            'user',
            'approved_comments' => function ($query) {
                $query->orderBy('id', 'desc');
            }
        ]);


        $post = $post->whereSlug($slug)->first();

        if ($post) {

            return view('blog.show', compact('post'));
        } else {
            return redirect()->route('frontend.index');
        }
    }

    public function edit($slug)
    {
        return view('blog.edit')->with('post', Post::where('slug', $slug)->first());
    }
    public function update(PostRequest $request, $slug)
    {
        try {
            $slug = Str::slug($request->title, '-');

            $newImagename = uniqid() . '-' . $slug . '.' . $request->image_path->extension();
            $request->image_path->move(public_path('image_path'), $newImagename);

            Post::where('slug', $slug)
                ->update([
                    'title' => $request->input('title'),
                    'description' => $request->input('description'),
                    'image_path' => $newImagename,
                    'slug' => $slug,
                    'user_id' => auth()->user()->id
                ]);

            return redirect('/blog/' . $slug);
        } catch (\Exception $ex) {

            return redirect()->back()
                ->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()])
                ->withInput();
        }
    }


    public function destroy($slug)
    {
        Post::where('slug', $slug)->delete();

        return redirect('/blog');
    }
    public function store_comment(CommentRequest $request, $slug)
    {
        $post = Post::whereSlug($slug)->first();

        if ($post) {

            $userId = auth()->check() ? auth()->id() : null;
            $data['name']           = $request->name;
            $data['email']          = $request->email;
            $data['url']            = $request->url;
            $data['ip_address']     = $request->ip();
            $data['comment']        = $request->comment;
            $data['post_id']        = $post->id;
            $data['user_id']        = $userId;
            $post->comments()->create($data);
            return redirect()->back()->with([
                'message' => 'Comment added successfully',
                'alert-type' => 'success'
            ]);
        }


        return redirect()->back()->with([
            'message' => 'Comment added successfully',
            'alert-type' => 'success'
        ]);
    }
}

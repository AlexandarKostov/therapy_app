<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Article;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('accesco-medical.blog.index', [
            'blogs' => Blog::all(),
            'articles' => Article::take(10)->get()
        ]);

//        'articles' => Article::whereHas('blogs', function ($query){
//        $query->published();
//        })->take(10)->get()
//        'articles' => Article::whereHas('blogs', function ($query){
//        $query->where('published_at', '<=', Carbon::now());
//    })->take(10)->get(),
    }

    public function create(): View
    {
        return \view('accesco-medical.blog.create',[
            'blogs' => Blog::all(),
            'articles' => Article::take(10)->get()
        ]);
    }

    public function store(StoreBlogRequest $request): \Illuminate\Http\RedirectResponse
    {
        $blog = Blog::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'published_at' => $request->published_at,
        ]);
        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->storeAs('blog/image/' . $blog->id, $request->file('image')->getClientOriginalName(), 'public');
            $blog->update([
                'image' => $image
            ]);
        }
        $blog->articles()->sync($request->article);
        return redirect()->route('blog.create')->with('message', 'New Blog created');
    }

    public function show($slug): View
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('accesco-medical.blog.show', compact('blog'));
    }

    public function edit(Blog $blog): View
    {
        return \view('accesco-medical.blog.edit',[
            'blogs' => $blog,
            'articles' => Article::all(),
        ]);
    }

    public function update(UpdateBlogRequest $request, Blog $blog): \Illuminate\Http\RedirectResponse
    {
        $blog->title = $request->title;
        $blog->slug =$request->slug;
        $blog->body = $request->body;
        $blog->published_at = $request->published_at;

        if ($request->hasFile('image'))
        {
            $image = $request->file('image')->storeAs('blog/image/' . $blog->id, $request->file('image')->getClientOriginalName(), 'public');
            $blog->update([
                'image' => $image
            ]);
        }
        $blog->save();
        $blog->articles()->sync($request->article);
        return redirect()->route('blog.create')->with('message', 'Blog has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog): \Illuminate\Http\RedirectResponse
    {
        $blog->articles()->detach($blog->article);
        $blog->delete();
        return redirect()->route('blog.create')->with('message', 'Blog has been deleted !');
    }

}

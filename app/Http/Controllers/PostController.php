<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Services\Slug;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts =  Posts::all();
        //$posts =  Posts::orderBy('id','desc')->get();
        //$posts =  Posts::where('id','1')->get();
        //$posts =  Posts::orderBy('title','desc')->get();
        //$posts =  Posts::orderBy('id','desc')->take(1)->get();
        $posts = Posts::orderBy('id', 'desc')->paginate(4);
        return view('blog.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
                'title' => 'required',
                'body' => 'required',
                'cover_image' => 'image|nullable|max:1999'
            ]);
            
            $filenameToStore = 'default-cover-image.jpg';

            //Handle file upload
            if($request->hasfile('cover_image')){
                # code...

                //get filename with ext.
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

               //get just file name 
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                
                //get extension only
                $extension = $request->file('cover_image')->getClientOriginalExtension();

                //filename to store
                $filenameToStore = time().'.'.$extension;

                //upload image to folder
                $path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);

            }

            $post = new Posts();
            $slug = new Slug();

            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->cover_img = $filenameToStore;
            $post->slug = $slug->createSlug($request->input('title'));
            $post->save();

            return redirect('/blog')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blog_title_slug)
    {
        $post = Posts::where('slug', $blog_title_slug)->firstOrFail(); 
        return view('blog/blog-detail')->with('post', $post);
    }

    public function search(Request $request)
    {   
        $query = $request->input('query');

        if($query != ''){
            $posts = Posts::where('title', 'LIKE', '%'.$query.'%')
                            ->orderBy('id', 'desc')->paginate(4);
                            


            if(count($posts) > 0){

                return view('blog.search_result')->with('posts', $posts)->withQuery($query);
            }
        }
        return 'Nothing found';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::find($id);
        return view('blog.edit')->with('post', $post);
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
        //return $id;
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = Posts::find($id);
        $slug = new Slug();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->slug = $slug->createSlug($request->input('title'));
        
        $post->save();

        return redirect('/blog')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();

        return redirect('/blog')->with('success', 'Post Deleted');        
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function update(Request $request){

        user::where('id', $request->id) -> update(
            [
                'name'=>$request->name
            ]
            );
        blog::where('userid', $request->id)-> update(
            [
                'username'=>$request->name
            ]
        );
        return redirect('/profile/'. Auth::user()->id);
    }

    public function updatepost(Request $blogs){
        blog::where('id', $blogs->blogid)->update(
            [
                'title'=> $blogs->title,
                'content'=> $blogs->content
            ]
        );
        return redirect('/blog/');
    }

    public function blogshow(){
        $blogs = blog::all();
        return view('blog', compact('blogs'));
    }

    public function getblogs(Request $array){
        $blogid = $array['blogid'];
        $title = $array['title'];
        $content = $array['content'];
        return view('form.edit-post', compact('blogid', 'title', 'content'));
    }

    public function addpost(Request $request){
        $blog = new blog();
        $blog->userid = $request->uid;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->username = $request->ownname;
        $blog->save();

        return back()->with('completed', 'Posted');
    }

    public function deletepost(Request $id){
        blog::where('id', $id->blogid)->delete();
        return back()->with('completed', 'Deleted');
    }
}

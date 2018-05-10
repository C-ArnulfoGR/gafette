<?php

namespace App\Http\Controllers;

use App\Basic;
use App\Post;
use App\Message;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        $data = Basic::all()->last();
        $posts = Post::all();
        return view('index', compact('data', 'posts'));
    }

    public function about_us()
    {
        $data = Basic::all()->last();
        return view('about_us', compact('data'));
    }

    public function contact_us()
    {
        $data = Basic::all()->last();
        return view('contact_us', compact('data'));
    }

    public function fileUpload(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'body' => 'required',
            'author' => 'nullable',
        ]);

        $image = $request->file('image');

        $input['imagename'] = date('Y-m-d H-i-s',time()).'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images');
        $image->move($destinationPath,$input['imagename']);

        //crear post en la base de datos
        Post::create([           
           'title' => $request['title'],
           'body' => $request['body'],
           'image' => $input['imagename'],
           'author' => $request['author'],
        ]);

        return back()->with('success', 'Publicacion creada correctamente.');
    }

    public function updatePost(Post $post) 
    {
        $data = request()->validate([
            'image' => 'required',
            'title' => 'required',
            'body' => 'required',
            'author' => 'nullable',
        ]);

        $post->update($data);

        return redirect()->route('post.postslist', ['post' => $post]);
    }

    public function sendMessage(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message_body' => 'required',
        ]);

        Message::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message_body' => $request['message_body'],
        ]);

        return redirect()->route('contact_us');
    }

    
}

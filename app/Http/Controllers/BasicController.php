<?php

namespace App\Http\Controllers;

use App\Basic;
use App\Post;
use App\Message;
use App\AnswerMessages;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        $data = Basic::all()->last();
        $posts = Post::where('active', true)->paginate(12);
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
           'active' => true,
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

    public function sendMessage(Request $request) 
    {
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

    public function answerMessage(Request $request) 
    {
        $this->validate($request, [
            'community_email' => 'required|email',
            'answer_body' => 'required',
            'message_id' => 'required',
        ]);

        AnswerMessages::create([
            'community_email' => $request['community_email'],
            'answer_body' => $request['answer_body'],
            'message_id' => $request['message_id'],
        ]);

        return redirect()->route('mailbox.messageslist');
    }
    
}

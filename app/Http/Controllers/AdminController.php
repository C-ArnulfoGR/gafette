<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Basic;
use App\Post;
use App\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $title = 'Panel de Administracion';
        return view('admin.index', compact('title'));
    }

    public function basic()
    {
        $title = 'Configuracion Basica';
        $data = Basic::all()->last();

        return view('admin.basic', compact('title', 'data'));
    }

    public function store_basic()
    {
        $data = request()->validate([
            'sitio' => 'required',
            'link_fb' => 'required',
            'link_tw' => 'required',
            'link_yt' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'telephone' => 'required',
            'objective' => 'required',
            'about_us' => 'required',
            'biography' => 'required',
        ]);
        
        Basic::create([
            'sitio' => $data['sitio'],
            'link_fb' => $data['link_fb'],
            'link_tw' => $data['link_tw'],
            'link_yt' => $data['link_yt'],
            'email' => $data['email'],
            'address' => $data['address'],
            'telephone' => $data['telephone'],
            'objective' => $data['objective'],
            'about_us' => $data['about_us'],
            'biography' => $data['biography'],
        ]);

        return redirect()->route('admin.basic');
    }

    public function login()
    {
        $data = Basic::all()->last();
        return view('login', compact('data'));
    }

    public function showPosts()
    {
        $title = 'Publicaciones';
        $posts = Post::where('active', true)->paginate(5);
        return view('post.postslist', compact('title', 'posts'));
    }

    public function deletePost(Post $post)
    {
        $post->update([
            'active' => '0',
        ]);
        return redirect()->route('post.postslist', ['post' => $post]);
    }

    public function showMessages()
    {
        $title = 'Buzon';
        $messages = Message::paginate(10);
        return view('mailbox.messageslist', compact('title', 'messages'));
    }

}

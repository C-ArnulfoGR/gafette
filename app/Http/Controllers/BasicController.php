<?php

namespace App\Http\Controllers;

use App\Basic;
use App\Post;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        $data = Basic::all()->last();
        $posts = Post::all()->last();
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


        //$this->postImage->add($input);
        //$this->save();

        return back()->with('success', 'Publicacion creada correctamente.');
    }

}

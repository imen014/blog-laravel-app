<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\MyBlog;

class MyBlogController extends Controller
{
    public function index (){
        $blogs = MyBlog::all();
        return view("blogs.index", compact('blogs'));
    }

    public function create(){
        return view("blogs.create");
    }

    public function store(Request $request){
        $request->validate([
            'auteur' => 'required|max:255',
            'commentaire'=> 'required',
            'email' => 'required|email'
        ]);
        
            MyBlog::create($request->all());
            return redirect()->route('blogs.index');

    
        
    }

        public function edit(){
            return view("blogs.edit");
        }

        public function update(Request $request, MyBlog $blog){
            $request->validate([
                'auteur' => 'required|max:255',
                'commentaire'=> 'required',
                'email' => 'required|email'
            ]);
                MyBlog::update($request->all());
                return redirect()->route('blogs.index');

        }

        public function destroy(MyBlog $blog){
            $blog->delete();
            return redirect()->route('blogs.index');

        }
    }


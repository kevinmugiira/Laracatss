<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        //Render a list of resources
        $articles = Artical::latest()->get();
        return view('articles',['articl' => $articles]);
    }


    public function show(Artical $articles)
    {

        //show a list of resources
        //$articles = Artical::findOrFail($id);

        return view('articles.show', ['article' => $articles]);
    }

    public function create()
    {
        //show a view to create a new resource
        return view('articles.create');

    }

    public function store()
    {
        //persist the new resource

        request()-> validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'

        ]);
        $article = new Artical();

        $article->title = \request('title');
        $article->excerpt = \request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');

    }

    public function edit(Artical $article)
    {
              //show a view to edit an existing resource
        return view('articles.edit',compact('article'));

    }

    public function update(Artical $article)
    {
        //persist the edited resource

        request()-> validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'

        ]);

       // $article = Artical::findOrFail($id);

        $article->title = \request('title');
        $article->excerpt = \request('excerpt');
        $article->body = \request('body');

        $article->save();

        return redirect('/articles/'. $article->id);
    }

    public function destroy()
    {
        //delete the resource

    }
}

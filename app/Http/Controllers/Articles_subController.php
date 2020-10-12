<?php

namespace App\Http\Controllers;

use App\Models\Artical;
use Illuminate\Http\Request;

class Articles_subController extends Controller
{
    public function show()
    {
        $article = Artical::all();

        return view('/articles', ['articl' => $article]);
    }
}

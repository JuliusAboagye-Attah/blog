<?php

namespace App\Http\Controllers;

use App\Article;
use App\CommentMod;

class CommentsController extends Controller
{

	public function __construct()
    	{

    		$this->middleware('auth');
    	}
    public function store (Article $article){


//create post and  validate

    	$this->validate(request(),['body' => 'required|min:2']);

    	CommentMod::create([
    		'body' => request('body'),
    		'article_id' => $article->id,
            'user_id' => $article ->user_id
    		]);


    	return back();

    }
}

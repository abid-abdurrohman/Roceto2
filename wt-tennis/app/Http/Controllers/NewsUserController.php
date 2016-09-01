<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\News;
use App\Model\Tag;
use App\Model\Comment;
use App\Model\User;
use App\Http\Requests;

class NewsUserController extends Controller
{
    public function index()
    {
    	$news = News::paginate(5);

    	return view('news.news', compact('news'));
    }

    public function show($slug)
    {
    	$other_news = News::all();
    	$news = News::where('slug', $slug)->first();
        $comments = Comment::findOrFail($news->id);
        $users = User::findOrFail($comment->id);
        dd($news->id);
        return view('news.news-single', compact('news', 'other_news', 'comments', 'users'));
    }

}

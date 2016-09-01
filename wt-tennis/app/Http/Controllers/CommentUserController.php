<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Model\Comment;

use App\Model\News;

class CommentUserController extends Controller
{
    public function store($id, Request $request){
    	 $this->validate($request, [
            'comment' => 'required'
        ]);

    	$input['news_id'] = $id;
        $input['user_id'] = 1;
    	$input = $request->all();

        Comment::create($input);
        $news = News::findOrFail($id);
        return redirect()->action('NewsUserController@show', $news->slug)->with('success', 'Member has been created');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Match;
use App\Model\Match_team;
use App\Http\Requests;

class BracketUserController extends Controller
{
    public function show($id)
    {
        $categories = Category::findOrFail($id);
        $matches = Match::where('category_id', $id)->paginate(5);
        return view('bagan.bagan', compact('categories', 'matches'));
    }
}

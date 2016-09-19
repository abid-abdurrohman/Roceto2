<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ResultUserController extends Controller
{
    public function index()
    {
        $matches = Match::paginate();
        return view('video.index', compact('matches'));
    }

    public function show($id)
    {
        return view('result.show');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Match;
use App\Model\Match_team;
use App\Http\Requests;
use PDF;

class BracketUserController extends Controller
{
    public function show($id)
    {
        $categories = Category::join('events', 'events.id', '=', 'categories.event_id')
          ->select('events.nama as nama_event', 'categories.*')->findOrFail($id);
        $matches = Match::where('category_id', $id)->paginate(5);
        return view('bracket.show', compact('categories', 'matches'));
    }

    public function getPDF($id)
    {
        $categories = Category::join('events', 'events.id', '=', 'categories.event_id')
          ->select('events.nama as nama_event', 'categories.*')->findOrFail($id);
        $matches = Match::where('category_id', $id)->paginate(5);
        $pdf = PDF::loadView('bracket.pdf.bracket', compact('categories', 'matches'));
        return $pdf->stream('bracket.index', compact('categories', 'matches'));
    }
}

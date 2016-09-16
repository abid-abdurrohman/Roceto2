<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Match;
use App\Model\Category;
use App\Http\Requests;

class CategoryMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $categories = Category::join('events', 'events.id', '=', 'categories.event_id')
          ->select('events.nama as nama_event', 'categories.*')->paginate(5);
        $events = Event::all();
        return view('admin.match.category', compact('events', 'categories'));*/
    }

    public function show($id)
    {
       /* $categories = Category::findOrFail($id);
        $matches = Match::where('category_id', $id)->paginate(5);
        return view('admin.match.index', compact('matches', 'categories'));*/
    }

}

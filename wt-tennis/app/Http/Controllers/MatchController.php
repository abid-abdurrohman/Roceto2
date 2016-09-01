<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Event;
use App\Model\Category;
use App\Model\Match;
use App\Model\TeamsMatch;
use App\Http\Requests;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id)
    {
        $categories = Category::findOrFail($id);
        $matches = Match::where('category_id', $id)->paginate(5);
        return view('admin.match.index', compact('matches', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $categories = Category::findOrFail($id);
        $matches = Match::where('category_id', $id)->paginate(5);
        return view('admin.match.index', compact('matches', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'no_match' => 'required',
            'nama' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
        ]);
        $input = $request->all();
        $categories = Category::findOrFail($id);
        $input['category_id'] = $categories->id;
        Match::create($input);
        return redirect()->action('CategoryMatchController@show', $categories->id)->with('success', 'Category has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_match)
    {
        $categories = Category::findOrFail($id);
        $match = Match::findOrFail($id_match);
        return view('admin.match.show', compact('categories', 'match'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_match)
    {
        $categories = Category::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_match)
    {
        $categories = Category::findOrFail($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_match)
    {
        $categories = Category::findOrFail($id);
        $match = Match::findOrFail($id_match);
        $match->delete();
        return redirect()->action('CategoryMatchController@show', $categories->id)->with('danger', 'Category has been deleted');
    }
}

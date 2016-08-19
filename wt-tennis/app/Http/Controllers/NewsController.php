<?php

namespace App\Http\Controllers;

use App\Model\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(5);

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'thumbnail' => 'required',
            'kategori' => 'required',
            'tag' => 'required',
            'deskripsi' => 'required'
        ]);
        $input = $request->all();

        $input['slug'] = str_slug($request->judul, '-');

        $photo = $request->thumbnail->getClientOriginalName();
        $destination = 'images/news/';
        $request->thumbnail->move($destination, $photo);

        $input['thumbnail'] = $destination.$photo;

        News::create($input);
        return redirect()->action('NewsController@index')->with('success','News has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $news = News::findOrFail($id);
      return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $news = News::findOrFail($id);

      return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'judul' => 'required',
        'thumbnail' => 'required',
        'kategori' => 'required',
        'tag' => 'required',
        'deskripsi' => 'required'
      ]);
      $news = News::findOrFail($id);

      $news['slug'] = str_slug($request->judul, '-');

      // $photo = $request->thumbnail->getClientOriginalName();
      // $destination = 'images/news/';
      // $request->thumbnail->move($destination, $photo);

      // $news['thumbnail'] = $destination.$photo;

      $news->update($request->all());
      return redirect()->action('NewsController@index')->with('info','News has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $news = News::findOrFail($id);
      Storage::delete($news->thumbnail);
      $news->delete();
      return redirect()->action('NewsController@index')->with('danger','News has been deleted');
    }
}

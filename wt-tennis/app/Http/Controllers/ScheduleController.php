<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Model\Schedule;
=======

>>>>>>> 5bf153c6b6dda566d0edde20d41c30d50480168a
use App\Http\Requests;

class ScheduleController extends Controller
{
<<<<<<< HEAD

	public function create(){
		//Valores recibidos via ajax
        $title = $_POST['title'];
        $start = $_POST['start'];
        $back = $_POST['background'];

        //Insertando evento a base de datos
        $schedules=new Schedule;
        $schedules->first_date=$start;
        //$evento->fechaFin=$end;
        $schedules->all_same=true;
        $schedules->color=$back;
        $schedules->title=$title;

        $schedules->save();
	};
    
=======
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.schedule.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
>>>>>>> 5bf153c6b6dda566d0edde20d41c30d50480168a
}

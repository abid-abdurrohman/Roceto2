<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Schedule;
use App\Http\Requests;

class ScheduleController extends Controller
{

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
    
}

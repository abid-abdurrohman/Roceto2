<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\User;
use App\Model\Statistic;
use App\Http\Requests;
use DB;

class ResultController extends Controller
{
    public function index()
    {
        $statistics = Statistic::join('participants', 'participants.id', '=', 'statistics.participant_id')
        ->join('users', 'users.id', '=', 'participants.user_id')->groupBy('participants.user_id')
        ->select('users.name as nama_user', DB::raw('count(participants.user_id) as total'))->get();
        return dd($statistics);
        return view('admin.result.index');
    }
}
// user_id, participant_id, rank_id
// 4,4,1
// 3,3,2
// 2,2,3
// 4,7,1
// 2,6,2
// 3,5,3

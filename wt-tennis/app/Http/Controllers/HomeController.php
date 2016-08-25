<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Individual;
use Illuminate\Mail\Mailer;

class HomeController extends Controller
{
    protected $mailer;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Mailer $mailer)
    {
        //$this->middleware('auth');
        $this->mailer = $mailer;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participant = Participant::all();
        return view('home.home', compact('participant'));
    }

    
}

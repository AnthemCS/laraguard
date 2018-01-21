<?php

namespace App\Http\Controllers;

use App\Room;

use Illuminate\Http\Request;
use App\Reservation;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home.index', ["roomReservations" => Reservation::with('rooms')->get()]);
    }

    public function getFreeRoomsToday()
    {
        # Get all the rooms that are available today
        # i.e rooms don't have reservations or reservations have expired
        # $rooms->availbleToday();
        $rooms = Room::all();
       return view('home.available');
    }

    public function getNewReservation($roomId)
    {
        $room = Room::find($roomId);
        return view('home.new-reservation', ["room" => $room]);
    }

}

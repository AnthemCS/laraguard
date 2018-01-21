<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservationRequest;
use App\Reservation;
use App\Guest;

class GuestReservationController extends Controller
{

    public function getCreateReservation($roomId)
    {
        return view('reservation.create', ["room" => Room::find($roomId)]);
    }

    public function postCreateReservation(StoreReservationRequest $request, $roomId)
    {
        $data = $request->all();

        #Store the guest that made the reservation
       $newGuest =  Guest::create([
            'title'       => $data['title'],
            'firstname'   => $data['firstname'],
            'lastname'    => $data['lastname'],
            'email'       => $data['email'],
            'contact_no'  => $data['contact_no'],
            'fax_no'      => $data['fax_no'],
            'addr_line_1' => $data['addr_line_1'],
            'addr_line_2' => $data['addr_line_2'],
            'city'        => $data['city'],
            'postal_code' => $data['postal_code'],
            'country'     => $data['country']
        ]);
        # Store a reservation

        Reservation::create([
            "room_id" => $roomId,
             "guest_id" => $newGuest->id,
            "arrival_date" => date_format(date_create($data['arrival_date']), 'Y-m-d'),
            "departure_date" => date_format(date_create($data['departure_date']), 'Y-m-d'),
            "adults" => $data['adults'],
            "children" => $data['children'],
            "comments" => $data['comments'],
            "status" => "New",
        ]);

        return redirect('/')->with('status', 'Reservation Sent Successfully');
    }
}

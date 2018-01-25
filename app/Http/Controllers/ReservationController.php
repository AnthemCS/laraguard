<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Guest;
use App\Room;
use App\Services;
use App\Status;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('reservation.index', ['rsvs' => Reservation::all(), 'statuses' => Status::all()]);
    }

    public function getAddRoomToRsv(Request $request,$rsvId)
    {
        //TODO : make a pivot table for rooms to reservation
        $rsv = Reservation::find($rsvId);
        $room = Room::find($request->input('roomId'));
        $rsv->room_id = $room->id;
        $rsv->update();

        return redirect('/reservations/'. $rsv->id)->with('success', 'Room Successfully added!');
    }

    public function getRemoveRoomFromRsv($rsvId)
    {
        //TODO : make a pivot table for rooms to reservation
        $rsv = Reservation::find($rsvId);
        $rsv->room_id = 0; // null value
        $rsv->update();
        return redirect('/reservations/'. $rsv->id)->with('success', 'Room Successfully added!');
    }


    public function getReservationStatusChange($rsvId, $statusId)
    {
         $rsv = Reservation::find($rsvId);
         $status = Status::find($statusId);

         $rsv->status_id = $status->id;
         $rsv->update();

        return redirect('/home')->with('success', 'Status Successfully changed!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('reservation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            "guest_id" => $newGuest->id,
            "arrival_date" => date_format(date_create($data['arrival_date']), 'Y-m-d'),
            "departure_date" => date_format(date_create($data['departure_date']), 'Y-m-d'),
            "adults" => $data['adults'],
            "children" => $data['children'],
            "comments" => $data['comments'],
            "status_id" => 3, // 3 - New as status
        ]);

        return redirect('/')->with('status', 'Reservation Sent Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        # Fetch the reservation selected to show
        Reservation::find($id);
        # create a list of statuses to display on the ui

        return view('reservation.show', ['roomList' => Room::all(), 'servicesList' => Services::all(),'rsv' => Reservation::find($id) ]);
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
        return view('reservation.edit',['rsv' => Reservation::find($id) ] );
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
        $data = $request->all();
        # Update Reservation
        $rsv = Reservation::find($id);
        $rsv->arrival_date = $data['arrival_date'];
        $rsv->departure_date = $data['departure_date'];

        #calculate number of nights
        $rsv->nights = $data['nights'];
        $rsv->adults = $data['adults'];
        $rsv->children = $data['children'];
        $rsv->comments = $data['comments'];
        $rsv->status = $data['status'];

        $rsv->update();
        return redirect('/reservations/' . $rsv->id)->with('status', 'Reservation updated successfully!');
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
}

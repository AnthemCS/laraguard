<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreReservationRequest;
use App\Reservation;
use App\Guest;

class GuestReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $reservations = Reservation::with('guest')->get();

        return view('reservation.index', ['reservations' => $reservations]);
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
    public function store(StoreReservationRequest $request)
    {
        //
         $data = $request->all();

        $newGuest = Guest::create([
          "title"       => $data['title'],
          "firstname"   => $data['firstname'],         
          "lastname"    => $data['lastname'],
          "email"       => $data['email'],
          "contact_no"  => $data['contact_no'],
          "fax_no"      => $data['fax_no'],
          "addr_line_1" => $data['addr_line_1'],
          "addr_line_2" => $data['addr_line_2'],
          "city"        => $data['city'],
          "postal_code" => $data['postal_code'],
          "country"     => $data['country']      
        ]); 

        $newReservation = Reservation::create([
           "guest_id"       => $newGuest->id,
           "arrival_date"   => date_format(date_create($data['arrival_date']), 'Y-m-d'),
           "departure_date" => date_format(date_create($data['departure_date']), 'Y-m-d'),
           "adults"         => $data['adults'],
           "children"       => $data['children'],
           "comments"       => $data['comments']
        ]);

        return redirect('reservation')->with('status', 'Reservation Sent Succesfully');
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
}

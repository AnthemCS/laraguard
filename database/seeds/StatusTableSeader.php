<?php

use Illuminate\Database\Seeder;

class StatusTableSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected static $STATUSES;
    public function run()
    {
        //
        $statusData = self::getStatusCollection();

        foreach ($statusData as $statusDatum){
            \App\Status::create($statusDatum);
        }
    }

    private static function getStatusCollection()
    {
        self::$STATUSES = collect([
            [
                "name" => "Checked-In",
                "type" => "success",
                "description" => "When a guest checks in for a booked reservation"
            ],
            [
                "name" => "Cancelled",
                "type" => "warning",
                "description" => "State active when guest has cancelled a booking reservation"
            ],
            [
                "name" => "New",
                "type" => "info",
                "description" => "State active when a new booking reservation has been made"
            ],
            [
                "name" => "No-Show",
                "type" => "danger",
                "description" => "State active when a reservation was not checked-in on day of arrival"
            ]
        ]);

        return self::$STATUSES;
    }
}

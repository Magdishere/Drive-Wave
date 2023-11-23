<?php

namespace App\Interfaces\Bookings;

interface BookingsRepositoryInterface{

        //Get all Bookings
        public function index();

        //Add/Store Booking
        public function store($request);

        //Update Booking
        public function update($request);

        //Delete Booking
        public function destroy($request);
}

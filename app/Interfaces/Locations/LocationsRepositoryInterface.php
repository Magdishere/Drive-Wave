<?php

namespace App\Interfaces\Locations;

interface LocationsRepositoryInterface{

        //Get all Locations
        public function index();

        //Add/Store Locations
        public function store($request);

        //Update Locations
        public function update($request);

        //Delete Locations
        public function destroy($request);
}

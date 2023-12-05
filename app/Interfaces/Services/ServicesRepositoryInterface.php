<?php

namespace App\Interfaces\Services;

interface ServicesRepositoryInterface{

        //Get all Services
        public function index();

        //Add/Store Services
        public function store($request);

        //Update Services
        public function update($request);

        //Delete Services
        public function destroy($request);
}

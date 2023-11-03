<?php
namespace App\Interfaces\Cars;


interface CarsRepositoryInterface{

    //Get all Cars Sections
    public function index();

    //Add/Store Section
    public function store($request);

    //Update Section
    public function update($request);

    //Delete Section
    public function destroy($request);


}

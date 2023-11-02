<?php
namespace App\Interfaces\CarsModels;


interface CarsModelsRepositoryInterface{

    //Get all Cars Models
    public function index();

    //Add/Store Section
    public function store($request);

    //Update Section
    public function update($request);

    //Delete Section
    public function destroy($request);


}

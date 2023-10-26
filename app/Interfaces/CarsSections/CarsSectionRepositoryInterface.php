<?php
namespace App\Interfaces\CarsSections;


interface CarsSectionRepositoryInterface{

    //Get all Cars Sections
    public function index();

    //Add/Store Section
    public function store($request);

    //Update Section
    public function update($request);


}

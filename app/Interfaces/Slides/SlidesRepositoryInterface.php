<?php
namespace App\Interfaces\Slides;


interface SlidesRepositoryInterface{

    //Get all Slides
    public function index();

    //Add Slides
    public function store($request);

    //Update Slides
    public function update($request);

    //Delete Slides
    public function destroy($request);


}

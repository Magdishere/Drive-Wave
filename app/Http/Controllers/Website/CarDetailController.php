<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\CarsSections;
use App\Models\Locations;
use App\Models\Slides;
use Illuminate\Http\Request;

class CarDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $ncars = Car::where('id', $id)->first();
        $cars = Car::all();
        $sections = CarsSections::where('id', $id)->first();
        $images = CarImage::where('car_id', $id)->first();
        $locations = Locations::all();
        $car_slides = Slides::all();
        $brands = Brands::all();
        $rlocations = Locations::all();
        $rcars = Car::all();
        $rcar_images = CarImage::all();
        $rcars = Car::with('images')->get();
        $rcar = Car::where('id', $id)->first();
        $rcars = Car::where('brand', $rcar->brand)->inRandomOrder()->limit(4)->get();
        return view('Website.car-details', compact('locations', 'ncars', 'images', 'sections', 'car_slides', 'rlocations', 'rcar_images', 'rcars', 'brands', 'cars'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

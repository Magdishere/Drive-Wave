<?php
namespace App\Repository\Cars;

use App\Interfaces\Cars\CarsRepositoryInterface;
use App\Models\Cars;
use App\Interfaces\CarsModels\CarsModelsRepositoryInterface;
use App\Models\Brands;
use App\Models\BrandsTranslation;
use App\Models\Car;
use App\Models\CarsSections;
use App\Models\CarsSectionsTranslation;

class CarsRepository implements CarsRepositoryInterface{

    public function index(){

        $cars = Car::with('carSections','carBrands')->get();
        $cars_sections = CarsSections::all();
        $brands = Brands::all();

        return view('Dashboard.Cars.index', compact('cars', 'cars_sections', 'brands'));
    }

    public function store($request)
    {
        Car::create([
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'section' => $request->input('section'),
            'color' => $request->input('color'),
            'fuel_type' => $request->input('fuel_type'),
            'description' => $request->input('description'),
            'brand' => $request->input('brand'),
            'cars_section' => $request->input('section'),
            'year' => $request->input('year'),
            'license_plate' => $request->input('license_plate'),
            'price_per_day' => $request->input('price_per_day'),
            'mileage' => $request->input('mileage'),
            'transmission' => $request->input('transmission'),
            'seating_capacity' => $request->input('seating_capacity'),
            'engine_capacity' => $request->input('engine_capacity'),
            'availability' => $request->input('availability'),
        ]);

        session()->flash('add');
        return redirect()->route('Cars.index');
    }

    public function update($request)
    {
        $cars = Car::findOrFail($request->id);

        $cars->update([
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'section' => $request->input('section'),
            'color' => $request->input('color'),
            'fuel_type' => $request->input('fuel_type'),
            'description' => $request->input('description'),
            'brand' => $request->input('brand'),
            'cars_section' => $request->input('section'),
            'year' => $request->input('year'),
            'license_plate' => $request->input('license_plate'),
            'price_per_day' => $request->input('price_per_day'),
            'mileage' => $request->input('mileage'),
            'transmission' => $request->input('transmission'),
            'seating_capacity' => $request->input('seating_capacity'),
            'engine_capacity' => $request->input('engine_capacity'),
            'availability' => $request->input('availability'),
        ]);

        session()->flash('edit');
        return redirect()->route('Cars.index');
    }

    public function destroy($request){


        Car::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('Cars.index');

    }
}

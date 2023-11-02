<?php
namespace App\Repository\CarsModels;

use App\Models\CarModel;
use App\Interfaces\CarsModels\CarsModelsRepositoryInterface;
use App\Models\Brands;
use App\Models\BrandsTranslation;
use App\Models\CarsSections;
use App\Models\CarsSectionsTranslation;

class CarsModelsRepository implements CarsModelsRepositoryInterface{

    public function index(){

        $cars_models = CarModel::with('carsSections','carsBrands')->get();;
        $cars_sections = CarsSections::all();
        $brands = Brands::all();

        return view('Dashboard.CarsModels.index', compact('cars_models', 'cars_sections', 'brands'));
    }

    public function store($request)
    {
        CarModel::create([
            'name' => $request->input('name'),
            'brand_id' => $request->input('Brand'),
            'cars_sections_id' => $request->input('Section'),
        ]);

        session()->flash('add');
        return redirect()->route('CarsModels.index');
    }

    public function update($request)
    {
        $cars_models = CarModel::findOrFail($request->id);
        $cars_models->update([
            'name' => $request->input('name'),
            'brand_id' => $request->input('Brand'),
            'cars_sections_id' => $request->input('Section'),
        ]);

        session()->flash('edit');
        return redirect()->route('CarsModels.index');
    }

    public function destroy($request){


        CarModel::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('CarsModels.index');

    }
}

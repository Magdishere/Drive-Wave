<?php
namespace App\Repository\CarsSections;

use App\Models\CarsSections;
use App\Interfaces\CarsSections\CarsSectionRepositoryInterface;

class CarsSectionRepository implements CarsSectionRepositoryInterface{

    public function index(){

        $cars_sections = CarsSections::all();
        return view('Dashboard.CarsSections.index', compact('cars_sections'));
    }

    public function store($request)
    {
        CarsSections::create([
            'type' => $request->input('type'),
            'description' => $request->input('description'),
            'num_of_cars' => $request->input('num_of_cars'),
        ]);

        session()->flash('add');
        return redirect()->route('CarsSections.index');
    }

    public function update($request)
    {
        $cars_sections = CarsSections::findOrFail($request->id);
        $cars_sections->update([
            'type' => $request->input('type'),
            'description' => $request->input('description'),
            'num_of_cars' => $request->input('num_of_cars'),
        ]);

        session()->flash('edit');
        return redirect()->route('CarsSections.index');
    }

    public function destroy($request){


        CarsSections::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('CarsSections.index');

    }
}

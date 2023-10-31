<?php
namespace App\Repository\CarsBrands;

use App\Models\Brands;
use App\Interfaces\CarsBrands\CarsBrandsRepositoryInterface;

class CarsBrandsRepository implements CarsBrandsRepositoryInterface{

    public function index(){

        $brands = Brands::all();
        return view('Dashboard.CarsBrands.index', compact('brands'));
    }

    public function store($request)
    {
        Brands::create([
            'name' => $request->input('name'),
            'country' => $request->input('country'),

        ]);

        session()->flash('add');
        return redirect()->route('CarsBrands.index');
    }

    public function update($request)
    {
        $brands = Brands::findOrFail($request->id);
        $brands->update([
            'name' => $request->input('name'),
            'country' => $request->input('country'),
        ]);

        session()->flash('edit');
        return redirect()->route('CarsBrands.index');
    }

    public function destroy($request){


        Brands::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('CarsBrands.index');

    }
}

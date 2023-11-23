<?php

namespace App\Repository\Locations;


use App\Models\Locations;
use App\Interfaces\Locations\LocationsRepositoryInterface;

class LocationsRepository implements LocationsRepositoryInterface{

    public function index(){

        $locations = Locations::all();
        return view('Dashboard.Locations.index', compact('locations'));
    }

    public function store($request)
    {
        Locations::create([
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'street_address' => $request->input('street_address'),
            'phone_number' => $request->input('phone_number'),
        ]);

        session()->flash('add');
        return redirect()->route('Locations.index');
    }

    public function update($request)
    {
        $locations = Locations::findOrFail($request->id);
        $locations->update([
            'country' => $request->input('country'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'street_address' => $request->input('street_address'),
            'phone_number' => $request->input('phone_number'),
        ]);

        session()->flash('edit');
        return redirect()->route('Locations.index');
    }

    public function destroy($request){


        Locations::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('Locations.index');

    }
}

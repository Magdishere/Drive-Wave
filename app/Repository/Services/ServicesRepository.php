<?php

namespace App\Repository\Services;


use App\Models\Services;
use App\Interfaces\Services\ServicesRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class ServicesRepository implements ServicesRepositoryInterface{

    public function index(){

        $services = Services::all();
        return view('Dashboard.Services.index', compact('services'));
    }

    public function store($request)
    {

        $imagePath = '';

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('Services', 'public'); // Store the Services image in the 'public' disk
        }


        Services::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image_path' => $imagePath,
        ]);

        session()->flash('add');
        return redirect()->route('Services.index');
    }

    public function update($request)
    {
        $services = Services::findOrFail($request->id);

        $imagePath = $services->image_path; // Keep the existing logo path

        if ($request->hasFile('image_path')) {
            // Delete the old logo if a new one is provided
            if ($services->image_path) {
                Storage::disk('public')->delete($services->image_path);
            }
            $imagePath = $request->file('image_path')->store('Services', 'public'); // Store the new logo image
        }

        $services->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image_path' => $imagePath,
        ]);

        session()->flash('edit');
        return redirect()->route('Services.index');
    }

    public function destroy($request){


        $services = Services::findOrFail($request->id);

        if ($services->image_path) {
            Storage::disk('public')->delete($services->image_path);
        }

        $services->delete();
        session()->flash('delete');
        return redirect()->route('Services.index');

    }
}

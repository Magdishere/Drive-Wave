<?php

namespace App\Repository\CarsBrands;

use App\Models\Brands;
use App\Interfaces\CarsBrands\CarsBrandsRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class CarsBrandsRepository implements CarsBrandsRepositoryInterface
{
    public function index()
    {
        $brands = Brands::all();
        return view('Dashboard.CarsBrands.index', compact('brands'));
    }

    public function store($request)
    {
        $logoPath = '';

        if ($request->hasFile('logo_path')) {
            $logoPath = $request->file('logo_path')->store('logos', 'public'); // Store the logo image in the 'public' disk
        }

        Brands::create([
            'name' => $request->input('name'),
            'country' => $request->input('country'),
            'logo_path' => $logoPath, // Save the path to the logo in the database
        ]);

        session()->flash('add');
        return redirect()->route('CarsBrands.index');
    }

    public function update($request)
    {
        $brands = Brands::findOrFail($request->id);
        $logoPath = $brands->logo_path; // Keep the existing logo path

        if ($request->hasFile('logo_path')) {
            // Delete the old logo if a new one is provided
            if ($brands->logo_path) {
                Storage::disk('public')->delete($brands->logo_path);
            }
            $logoPath = $request->file('logo_path')->store('logos', 'public'); // Store the new logo image
        }

        $brands->update([
            'name' => $request->input('name'),
            'country' => $request->input('country'),
            'logo_path' => $logoPath, // Update the logo path in the database
        ]);

        session()->flash('edit');
        return redirect()->route('CarsBrands.index');
    }

    public function destroy($request)
    {
        $brands = Brands::findOrFail($request->id);

        if ($brands->logo_path) {
            Storage::disk('public')->delete($brands->logo_path);
        }

        $brands->delete();
        session()->flash('delete');
        return redirect()->route('CarsBrands.index');
    }
}

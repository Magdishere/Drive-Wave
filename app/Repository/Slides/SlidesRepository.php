<?php
namespace App\Repository\Slides;

use App\Interfaces\Slides\SlidesRepositoryInterface;
use App\Models\Slides;
use Illuminate\Support\Facades\Storage;

class SlidesRepository implements SlidesRepositoryInterface{

    public function index(){

        $slides = Slides::all();
        return view('Dashboard.Slides.index', compact('slides'));
    }

    public function store($request)
    {

        $imagePath = '';

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('Slides', 'public'); // Store the Slides image in the 'public' disk
        }

        Slides::create([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'image_path' => $imagePath,
        ]);

        session()->flash('add');
        return redirect()->route('Slides.index');
    }

    public function update($request)
    {
        $slides = Slides::findOrFail($request->id);

        $imagePath = $slides->image_path; // Keep the existing logo path

        if ($request->hasFile('image_path')) {
            // Delete the old logo if a new one is provided
            if ($slides->image_path) {
                Storage::disk('public')->delete($slides->imagePath);
            }
            $imagePath = $request->file('logo_path')->store('logos', 'public'); // Store the new logo image
        }

        $slides->update([
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'image_path' => $imagePath,
        ]);

        session()->flash('edit');
        return redirect()->route('Slides.index');
    }

    public function destroy($request){


        $slides = Slides::findOrFail($request->id);

        if ($slides->image_path) {
            Storage::disk('public')->delete($slides->image_path);
        }

        $slides->delete();
        session()->flash('delete');
        return redirect()->route('Slides.index');

    }
}

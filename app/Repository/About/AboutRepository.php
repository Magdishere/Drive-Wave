<?php

namespace App\Repository\About;

use App\Models\About;
use App\Interfaces\About\AboutRepositoryInterface;
use Illuminate\Support\Facades\Storage;

class AboutRepository implements AboutRepositoryInterface
{
    public function index()
    {
        $abouts = About::all();
        return view('Dashboard.About.index', compact('abouts'));
    }

    public function store($request)
    {
        $imagePath = '';
        $iconPath = '';

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('about-images', 'public'); // Store the logo image in the 'public' disk
        }


        if ($request->hasFile('icon_image')) {
            $iconPath = $request->file('icon_image')->store('about-icons', 'public'); // Store the logo image in the 'public' disk
        }

        About::create([
            'title' => $request->input('title'),
            'paragraph' => $request->input('paragraph'),
            'info' => $request->input('info'),
            'image_path' => $imagePath,
            'icon_image' => $iconPath, // Save the path to the logo in the database
        ]);

        session()->flash('add');
        return redirect()->route('About.index');
    }

    public function update($request)
    {
        $abouts = About::findOrFail($request->id);
        $imagePath = $abouts->image_path; // Keep the existing logo path
        $iconPath = $abouts->icon_image; // Keep the existing logo path

        if ($request->hasFile('image_path')) {
            // Delete the old logo if a new one is provided
            if ($abouts->image_path) {
                Storage::disk('public')->delete($abouts->image_path);
            }
            $imagePath = $request->file('image_path')->store('about_images', 'public'); // Store the new logo image
        }

        if ($request->hasFile('icon_image')) {
            // Delete the old logo if a new one is provided
            if ($abouts->icon_image) {
                Storage::disk('public')->delete($abouts->icon_image);
            }
            $iconPath = $request->file('icon_image')->store('about_icons', 'public'); // Store the new logo image
        }

        $abouts->update([
            'title' => $request->input('title'),
            'paragraph' => $request->input('paragraph'),
            'info' => $request->input('info'),
            'image_path' => $imagePath,
            'icon_image' => $iconPath, // Save the path to the logo in the database
        ]);

        session()->flash('edit');
        return redirect()->route('About.index');
    }

    public function destroy($request)
    {
        $abouts = About::findOrFail($request->id);

        if ($abouts->image_path) {
            Storage::disk('public')->delete($abouts->image_path);
        }

        if ($abouts->icon_path) {
            Storage::disk('public')->delete($abouts->icon_path);
        }

        $abouts->delete();
        session()->flash('delete');
        return redirect()->route('About.index');
    }
}

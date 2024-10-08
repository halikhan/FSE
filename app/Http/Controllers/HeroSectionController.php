<?php
namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function index()
    {
        // dd('here');
        $heroSections = HeroSection::all();
        return view('pages/admin/hero-section/index', compact('heroSections'));
    }

    public function create()
    {
        return view('pages/admin/hero-section/create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'pinterest_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]);
    
        // Check if an image is uploaded
        if ($request->hasFile('image')) {
            // Store the uploaded image in the 'public/img/hero' directory
            $imagePath = $request->file('image')->store('img/hero', 'public');
            $validated['image'] = $imagePath;
        }
    
        HeroSection::create($validated);
    
        return redirect()->route('hero-sections.index')->with('success', 'Hero section created successfully.');
    }
    

    public function show(HeroSection $heroSection)
    {
        return view('pages/admin/hero-section/show', compact('heroSection'));
    }

    public function edit(HeroSection $heroSection)
    {
        return view('pages/admin/hero-section/edit', compact('heroSection'));
    }

    public function update(Request $request, HeroSection $heroSection)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'pinterest_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]);
    
        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Store the uploaded image in the 'public/img/hero' directory
            $imagePath = $request->file('image')->store('img/hero', 'public');
    
            // Delete the old image if necessary
            if ($heroSection->image) {
                Storage::disk('public')->delete($heroSection->image);
            }
    
            // Assign the new image path
            $validated['image'] = $imagePath;
        }
    
        // Update the hero section with validated data
        $heroSection->update($validated);
    
        return redirect()->route('hero-sections.index')->with('success', 'Hero section updated successfully.');
    }
    
    public function destroy(HeroSection $heroSection)
    {
        // Delete the image from storage
        if ($heroSection->image) {
            Storage::disk('public')->delete($heroSection->image);
        }
    
        // Delete the hero section from the database
        $heroSection->delete();
    
        return redirect()->route('hero-sections.index')->with('success', 'Hero section deleted successfully.');
    }
    
}

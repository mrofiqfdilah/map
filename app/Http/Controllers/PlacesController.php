<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Regencies;
use App\Models\Places;
use Illuminate\Support\Str;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $place = Places::all();
        return view('admin.dataplace.index', compact('place'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Categories::all();
        $kabupaten = Regencies::all();
        return view('admin.dataplace.create', compact('kategori','kabupaten'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $images = $request->images;
        $slug = Str::slug($images->getClientOriginalName());
        $new_images = time() .'_'. $slug;
        $images->move('images_place/' , $new_images);

        Places::create([
        'regency_id' => $request->regency_id,
        'category_id' => $request->category_id,
        'images' => 'images_place/' . $new_images,
        'name' => $request->name
        ]);

        return redirect()->route('dataplace.index')->with('success', 'Add Data Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

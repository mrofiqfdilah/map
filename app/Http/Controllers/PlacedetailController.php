<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Places;
use App\Models\Places_detail;
use Illuminate\Support\Str;

class PlacedetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $placedetail = Places_detail::all();
        return view('admin.dataplacedetail.index', compact('placedetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $place = Places::all();
        return view('admin.dataplacedetail.create', compact('place'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $images = $request->images;
        $slug = Str::slug($images->getClientOriginalName());
        $new_images = time() .'_'. $slug;
        $images->move('place_images/' , $new_images);

        Places_detail::create([
        'place_id' => $request->place_id,
        'images' => 'place_images/' . $new_images,
        'description' => $request->description,
        'address' => $request->address,
        'latitude' => $request->latitude,
        'longitude' => $request->longitude
        ]);

        return redirect()->route('dataplacedetail.index')->with('success', 'Add Data Success');
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

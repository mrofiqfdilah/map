<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provincies;
use Illuminate\Support\Str;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $provinsi = Provincies::all();
        return view('admin.dataprovinsi.index', compact('provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dataprovinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cover = $request->cover;
        $slug = Str::slug($cover->getClientOriginalName());
        $new_cover = time() . '_' . $slug;
        $cover->move('provinsi_cover/' , $new_cover);

        Provincies::create([
        'name' => $request->name,
        'cover' => 'provinsi_cover/' . $new_cover
        ]);

        return redirect()->route('dataprovinsi.index')->with('success', 'Add Data Success');
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

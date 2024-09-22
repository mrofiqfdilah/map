<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regencies;
use App\Models\Provincies;
use Illuminate\Support\Str;

class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kabupaten = Regencies::all();
        return view('admin.datakabupaten.index', compact('kabupaten'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinsi = Provincies::all();
        return view('admin.datakabupaten.create', compact('provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cover = $request->cover;
        $slug = Str::slug($cover->getClientOriginalName());
        $new_cover = time() .'_'. $slug;
        $cover->move('kabupaten_cover/' , $new_cover);

        Regencies::create([
        'province_id' => $request->province_id,
        'name' => $request->name,
        'cover' => 'kabupaten_cover/' . $new_cover
        ]);

        return redirect()->route('datakabupaten.index')->with('success', 'Add Data Success');
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

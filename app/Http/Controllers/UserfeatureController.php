<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categories;
use App\Models\Places;
use App\Models\Places_detail;
use App\Models\Provincies;
use App\Models\Regencies;

class UserfeatureController extends Controller
{
    public function pilihprovinsi(Request $request)
    {
        $provinsi = Provincies::all();
        return view('user.pilihprovinsi', compact('provinsi'));
    }

    public function pilihkabupaten(Request $request, $idprovinsi)
    {
        $kabupaten = Regencies::where('province_id', $idprovinsi)->get();

        return view('user.pilihkabupaten', compact('kabupaten'));
    }

    public function pilihkategori(Request $request, $idkabupaten)
    {
       $kategori = Categories::all();

       $kab = Regencies::where('id', $idkabupaten)->first();

        return view('user.pilihkategori', compact('kategori','kab'));
    }

    public function pilihplace(Request $request, $idkab)
    {
        $place = Places::where('regency_id', $idkab)->get();

        return view('user.pilihplace', compact('place'));
    }
    
    public function placedetail(Request $request, $idplace)
    {
        $details = Places_detail::where('place_id', $idplace)->get();

        return view('user.placedetail', compact('details'));
    }
}

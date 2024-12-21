<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;

class KostController extends Controller
{
    public function index()
    {
        $kost = Kost::where('status', 'tersedia');
        return view('pages.home', [
            'kosts' => $kost
        ]);
    }

    public function booking(Request $request, $id)
    {
        $validate = $request->validate([]);
    }

    public function show($id)
    {
        $kost = Kost::findOrFail($id);
        return view('pages.detail', [
            'kost' => $kost
        ]);
    }
}

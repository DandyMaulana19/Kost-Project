<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kosts = Kost::all();
        return view('admin.dashboard', [
            'kosts' => $kosts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        Kost::create([
            'nama' => $request->input('nama'),
            'tipe' => $request->input('tipe'),
            'alamat' => $request->input('alamat'),
            'status' => $request->input('status'),
            'stock' => $request->input('stock'),
            'image' => $imagePath,
        ]);

        return redirect('/admin/dashboard');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kost = Kost::findOrFail($id);
        return view('admin.detail-data', [
            'kost' => $kost
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kost = Kost::findOrFail($id);
        return view('admin.edit-data', [
            'kost' => $kost
        ]);
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
        $kost = Kost::findOrFail($id);

        if ($kost->image) {
            Storage::disk('public')->delete($kost->image);
        }
        $kost->delete();

        return redirect('/admin/dashboard');
    }
}

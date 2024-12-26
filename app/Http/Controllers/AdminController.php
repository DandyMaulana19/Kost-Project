<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalKost = Kost::count();
        $kosTersedia = Kost::where('status', 'Tersedia')->count();
        $kosPutri = Kost::where('tipe', 'Putri')->count();
        $kosPutra = Kost::where('tipe', 'Putra')->count();
        $kosCampur = Kost::where('tipe', 'Campur')->count();
        $kosts = Kost::all();
        return view('admin.dashboard', [
            'kosts' => $kosts,
            'totalKost' => $totalKost,
            'kostTersedia' => $kosTersedia,
            'kostPutri' => $kosPutri,
            'kostPutra' => $kosPutra,
            'kostCampur' => $kosCampur,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah-data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        try {
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
                'harga' => $request->input('harga'),
                'stock' => $request->input('stock'),
                'deskripsi' => $request->input('deskripsi'),
                'image' => $imagePath,
            ]);

            Alert::success('Added Successfully', 'Data Telah berhasil ditambahkan!');
            return redirect('/admin');
        } catch (Exception $e) {
            Alert::error('Added Failed', 'Data Tidak berhasil ditambahkan!');
            return redirect('/admin/tambah-data');
        }
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
        try {
            $kost = Kost::findOrFail($id);

            if ($request->hasFile('image')) {
                if ($kost->image) {
                    Storage::disk('public')->delete($kost->image);
                }
                $imagePath = $request->file('image')->store('images', 'public');
            } else {
                $imagePath = $kost->image;
            }

            $kost->update([
                'nama' => $request->input('nama'),
                'tipe' => $request->input('tipe'),
                'alamat' => $request->input('alamat'),
                'status' => $request->input('status'),
                'harga' => $request->input('harga'),
                'stock' => $request->input('stock'),
                'deskripsi' => $request->input('deskripsi'),
                'image' => $imagePath,
            ]);

            Alert::success('Update Successfully', 'Data Telah berhasil diupdate!');
            return redirect('/admin');
        } catch (Exception $e) {
            Alert::error('Update Failed', 'Data Tidak berhasil diupdate!');
            return redirect('/admin/edit-data/' . $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $kost = Kost::findOrFail($id);

            if ($kost->image) {
                Storage::disk('public')->delete($kost->image);
            }
            $kost->delete();

            Alert::success('Delete Successfully', 'Data Telah berhasil dihapus!');

            return redirect('/admin');
        } catch (Exception $e) {
            Alert::error('Delete Failed', 'Data Tidak berhasil dihapus!');
            return redirect('/admin');
        }
    }
}

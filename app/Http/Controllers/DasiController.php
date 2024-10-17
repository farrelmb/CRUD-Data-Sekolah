<?php

namespace App\Http\Controllers;

use App\Models\Dasi;
use Illuminate\Http\Request;
// use App\Http\Controllers\Dasi;

class DasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dasi::all();
        return view('dasi.index', compact('data'));
    }

    public function show($id)
    {
        $data = Dasi::where('id', $id)->first();
        return view('dasi.info', compact('data'));
    }

    public function create()
    {
        return view('dasi.create');
    }

    public function edit($id_pass)
    {
        $data = Dasi::where('id', $id_pass)->first();
                    
        return view('dasi.edit', compact('data'));
    }

   //function
    public function store(Request $request)
    {
        Dasi::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'rayon' => $request->rayon
        ]);
        return redirect()->route('dasi.index')->with([
            'alert_success' => 'Data ditambahkan!'
        ]);
    }

    
    public function update(Request $request, $id_pass)
    {
        Dasi::where('id', $id_pass)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'rayon' => $request->rayon,
        ]);
        return redirect()->route('dasi.index')->with([
            'alert_success' => 'Data berhasil di edit!'
        ]);

    }

    public function destroy($id_pass)
    {
        Dasi::where('id', $id_pass)->delete();

        return redirect()->route('dasi.index')->with([
            'alert_danger' => 'Data dihapus!'
        ]);
    }
}

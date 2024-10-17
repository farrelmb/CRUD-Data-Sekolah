<?php

namespace App\Http\Controllers;

use App\Models\Dagu;
use Illuminate\Http\Request;

class DaguController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Dagu::all();
        return view('dagu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dagu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dagu::create([
            'name' => $request->name,
            'mapel' => $request->mapel,
            'age' => $request->age
        ]);
        return redirect()->route('dagu.index')->with([
            'alert_success' => 'Data berhasil ditambahkan!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Dagu::where('id', $id)->first();
        return view('dagu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Dagu::where('id', $id)->update([
            'name' => $request->name,
            'mapel' => $request->mapel,
            'age' => $request->age,
        ]);
        return redirect()->route('dagu.index')->with([
            'alert_success' => 'Berhasil edit data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Dagu::where('id', $id)->delete();
        return redirect()->route('dagu.index')->with([
            'alert_failed' => 'Berhasil hapus data!'
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class Doktercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokter = Dokter::all();
        return view('datadokter',compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formdokter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Dokter::create($request->all());
        return redirect()->route('dokter.index');
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
        $dokter =dokter::find($id);
        $dokter->delete();
        return redirect()->route('dokter.index');
        
    }
}

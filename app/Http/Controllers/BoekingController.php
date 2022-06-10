<?php

namespace App\Http\Controllers;

use App\boeking;
use App\kamer;
use Illuminate\Http\Request;

class BoekingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $boekings = boeking::all();
        return view('boeking.index', compact('boekings'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamers= kamer::all();
        return view('boeking.create', compact('kamers'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'datumboeking' =>'required',
            'naam' =>'required',
            'adres' =>'required',
            'creditkaartnummer' =>'required|integer',
            'aankomstdatum' =>'required',
            'vertrekdatum' =>'required'
        ]);



        // Bewaar nieuwe boeking
        $boeking = new boeking([
            'datumboeking' => $request->datumboeking,
            'naam' => $request->naam,
            'adres' => $request->adres,
            'creditkaartnummer'=> $request->creditkaartnummer,
            'aankomstdatum' => $request->aankomstdatum,
            'vertrekdatum'=> $request->vertrekdatum,
            'kamer_id' => $request->kamer_id,


        ]);

        $boeking->save();
        return redirect('/boeking');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boeking = boeking::find($id);
        $kamers = Kamer::all();


        return view('boeking.edit', compact('boeking', 'kamers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $boeking = boeking::find($id);
        $boeking->datumboeking = $request->datumboeking;
        $boeking->naam = $request->naam;
        $boeking->adres = $request->adres;
        $boeking->creditkaartnummer = $request->creditkaartnummer;
        $boeking->aankomstdatum = $request->aankomstdatum;
        $boeking->vertrekdatum = $request->vertrekdatum;



        $boeking->save();
        return redirect('/boeking');


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boeking = boeking::find($id);
        $boeking->delete();
        return redirect('/boeking');
    }
}

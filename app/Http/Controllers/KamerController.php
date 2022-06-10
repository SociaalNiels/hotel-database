<?php

namespace App\Http\Controllers;

use App\kamer;
use Illuminate\Http\Request;

class KamerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamers = kamer::all();
        return view('kamer.index', compact('kamers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("kamer.create");
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
            'nummer'=>'required',
            'personen'=> 'required|integer',
            'oppervlakte' => 'required|integer'
        ]);

        // Verplaats foto naar storage/images folder
        $imageName = "";
        if ($request->has('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public', $imageName);
        }

        // Bewaar nieuwe kamer
        $kamer = new Kamer([
            'nummer' => $request->nummer,
            'personen' => $request->personen,
            'oppervlakte' => $request->oppervlakte,
            'foto' => $imageName,
            'minibar' => $request->has('minibar') ? 1 : 0
        ]);

        $kamer->save();
        return redirect('/kamer');
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
        $kamer = kamer::find($id);
        return view('kamer.edit', compact('kamer'));
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
      $kamer = kamer::find($id);
      $kamer->nummer = $request->nummer;
      $kamer->personen = $request->personen;
      $kamer->oppervlakte = $request->oppervlakte;
      $kamer->minibar = $request->has('minibar') ? 1 : 0;

      $kamer->save();
      return redirect('/kamer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamer = kamer::find($id);
        $kamer->delete();
        return redirect('/kamer');
    }
}

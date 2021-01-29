<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $parties = Party::all();
        return view('parties.index', compact('parties', 'parties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'max:15'],
            'cover' => ['required'],
            'description' => ['required', 'string', 'max:50'],
            'date' => ['required', 'date'],
            'time' => ['required'],
            'location' => ['required', 'string', 'max:20'],
            'style' => ['required'],
        ]);

        $input = $request->all();
        Party::create($input);

        return redirect()->route('parties.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party)
    {
        $party = Party::findOrFail($party);
        return view('parties.show', compact('party', 'party'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function edit(Party $party)
    {
        $party = Party::find($party);

        return view('parties.edit', compact('party', 'party'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Party $party)
    {

        $party = Party::findOrFail($party);

        $this->validate($request, [
            'title' => ['required', 'string', 'max:15'],
            'cover' => ['required'],
            'description' => ['required', 'string', 'max:50'],
            'date' => ['required', 'date'],
            'time' => ['required'],
            'location' => ['required', 'string', 'max:20'],
            'style' => ['required'],
        ]);

        $input = $request->all();

        $party->fill($input)->save();

        return redirect()->route('parties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Party  $party
     * @return \Illuminate\Http\Response
     */
    public function destroy(Party $party)
    {
        $party = Party::findOrFail($party);

        $party->delete();

        return redirect()->route('parties.index');
    }
}

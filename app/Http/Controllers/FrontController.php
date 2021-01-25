<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class FrontController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party)
    {
        
        return view('party-details', ['party' => $party]);
    }
}

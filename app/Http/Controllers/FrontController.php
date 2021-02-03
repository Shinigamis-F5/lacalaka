<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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

    public function showInDetailFront($id)
    {
        $user = User::find($id);
        return view('venue-detail-page', [
            'user' => $user,
        ]);
    }
}

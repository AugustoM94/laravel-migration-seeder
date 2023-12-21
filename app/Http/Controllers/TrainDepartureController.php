<?php

namespace App\Http\Controllers;

use App\Models\Train;

class TrainDepartureController extends Controller
{
    public function index()
    {
        $trains = Train::whereDate('departure_time', now()->toDateString())->get();

        return view('leaving.index', compact('trains'));
    }
}

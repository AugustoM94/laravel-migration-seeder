<?php

namespace App\Http\Controllers;

use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();

        return view('trains.index', compact('trains'));
    }
}

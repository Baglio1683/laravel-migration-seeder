<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train; 
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class PageController extends Controller
{
    public function index() {

        $trains = Train::where('Data_partenza', '>=' , now())->get();
        return view('trains.index', compact('trains'));
    }
}

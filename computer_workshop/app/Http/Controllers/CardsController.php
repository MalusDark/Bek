<?php

namespace App\Http\Controllers;

use App\Models\service;
use App\Models\serviceList;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function __invoke()
    {
        return serviceList::FilterList(1);
    }
    //public function returnCount($min, $max, $name, $car)
    //{
    //    return view('main.cards');
    //}
}

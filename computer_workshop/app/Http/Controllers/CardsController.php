<?php

namespace App\Http\Controllers;

use App\Models\serviceList;

class CardsController extends Controller
{
    public function FilterList($min,$max,$selectedServiceType,$AutoType) : void
    {
        serviceList::FilterList($min,$max,$selectedServiceType,$AutoType);
    }
    public function SearchService($name) : void
    {
        serviceList::SearchService($name);
    }
    public function  AllList() : void
    {
        serviceList::AllList();
    }
}

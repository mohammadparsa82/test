<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function getPeople(){
        $people = People::all();
        return $people;
    }
}

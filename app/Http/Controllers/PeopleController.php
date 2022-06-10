<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function getAllPeople()
    {
        $people = People::all();

        return view('people.index', ['people' => $people]);
    }
}

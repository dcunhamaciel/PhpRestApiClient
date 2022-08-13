<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\People;

class PeopleController extends Controller
{
    const API_URI = 'https://swapi.dev/api/people';

    public function getAllPeople()
    {
        $people = People::all();

        return view('people.index', ['people' => $people]);
    }

    public function getPeopleByName(string $name)
    {
        $people = People::where('name', $name)->get()->first();

        return $people;
    }

    public function updatePeople()
    {
        $this->updatePeopleApi($this::API_URI);

        return redirect()->route('people');
    }

    private function updatePeopleApi($uri)
    {
        if (is_null($uri)) {
            return;
        }

        $peopleJsonApi = Http::get($uri)->json();
        
        foreach ($peopleJsonApi['results'] as $peopleApi) {
            $people = $this->getPeopleByName($peopleApi['name']);
            if (is_null($people)) {
                $people = new People();
                $people->name = $peopleApi['name'];
                $people->height = $peopleApi['height'];
                $people->mass = $peopleApi['mass'];
                $people->hair_color = $peopleApi['hair_color'];
                $people->skin_color = $peopleApi['skin_color'];
                $people->eye_color = $peopleApi['eye_color'];
                $people->birth_year = $peopleApi['birth_year'];
                $people->gender = $peopleApi['gender'];
                $people->save();
            }            
        }

        $this->updatePeopleApi($peopleJsonApi['next']);        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\abilities;
use App\Models\pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class pokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPokemon = pokemon::all();
        $ability = abilities::all();

        if ($dataPokemon->isNotEmpty()) {
            $pokemon = $dataPokemon;
            return view('pokemon.index', compact('pokemon'));
        } 
            else {
                for ($id = 1; $id <= 400; $id++) {
                $request = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}")->json();
                
                $name = $request['name'];
                $base_experience = $request['base_experience'];
                $ability = $request['abilities'][0]['ability']['name'];
                $weight = $request['weight'];
                $image_url = $request['sprites']['front_default'];

                if ($request["weight"] >= 100) {
                    $data = [
                    'name' => $name,
                    // 'ability' => $ability,
                    'base_experience' => $base_experience,
                    'weight' => $weight,
                    'image_url' => $image_url,
                    ];

                    pokemon::create($data);

                    return view('pokemon.index', compact('pokemon'));
                }

            }
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

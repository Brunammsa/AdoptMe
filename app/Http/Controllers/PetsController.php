<?php

namespace App\Http\Controllers;

use App\Models\Pets;
use App\Models\States;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetsController extends Controller
{
    public function index(): View
    {
        $pets = Pets::where('users_id', Auth::user()->id)->get();

        return view('meusPets.index')->with('pets', $pets);
    }

    public function create(): View
    {
        $states = States::all();

        return view('meusPets.create')->with('states', $states);
    }

    public function store(Request $request)
    {
        $userId = User::where('name', Auth::user()->name)->first()->id;

        Pets::create([
            'name' => ucfirst($request->name),
            'age' => $request->age,
            'size' => $request->size,
            'description' => ucfirst($request->description),
            'users_id' => $userId
        ]);

        return to_route('meusPets.index');
    }

    public function editPet()
    {

    }

    public function updatePet()
    {

    }

    public function deletePet()
    {

    }

    public function allPets(): View
    {
        $pets = Pets::orderBy('created_at', 'desc')->simplePaginate(4);
    
        return view('dashboard')->with('pets', $pets);
    }
}

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
        //$pets = Pets::where('users_id, Auth::user()->id)->get();

        // $user  = Auth::user();
        // $pets = $user->pets;
        $pets = [];
        $pet = new Pets();

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

        $name = $request->input('name');
        $age = $request->input('age');
        $size = $request->input('size');
        dd($size);
        $description = $request->input('description');

        Pets::create([
            'name' => ucfirst($name),
            'age' => $age,
            'size' => $size,
            'description' => ucfirst($description),
            'users_id' => $userId
        ]);

        redirect('/meusPets');
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

    public function allPets(User $user)
    {
        $pets = $user->pets;
    
        return view('meusPets.index')->with('pets', $pets);
    }
}

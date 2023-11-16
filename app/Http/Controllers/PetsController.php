<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetsController extends Controller
{
    public function index(): View
    {
        // $user  = Auth::user();
        // $pets = $user->pets;

        $pets = [
            'lulu',
            'haru',
            'chorão'
        ];
 
        return view('meusPets.index')->with('pets', $pets);
    }

    public function create(): View
    {
        return view('meusPets.create');
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

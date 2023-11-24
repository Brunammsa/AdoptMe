<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetsFormRequest;
use App\Models\Cities;
use App\Models\Files;
use App\Models\Pets;
use App\Models\States;
use App\Models\User;
use Illuminate\Contracts\View\View;
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
        $cities = Cities::all();

        return view('meusPets.create')
                ->with('states', $states)
                ->with('cities', $cities);
    }

    public function store(PetsFormRequest $request)
    {
        if ($request->hasFile('image')) {           
            $path = $request->file('image')->path();
            $doc = file_get_contents($path);
            $base64 = base64_encode($doc);
            $mime = $request->file('image')->getClientMimeType();
        };

        $request->image->move('upload/', $request->file('image')->getClientOriginalName());

        $userId = User::where('name', Auth::user()->name)->first()->id;
        $pet = Pets::create([
            'name' => ucfirst($request->name),
            'age' => $request->age,
            'size' => $request->size,
            'description' => ucfirst($request->description),
            'users_id' => $userId,
            'cities_id' => $request->city
        ]);

        $petId = $pet->id;
        
        Files::create([
            'pets_id' => $petId,
            'name_upload'=> $request->file('image')->getClientOriginalName(),
            'file' => $base64,
            'mime'=> $mime
        ]);

        return to_route('meusPets.index');
    }

    public function edit(Pets $pets)
    {
        $states = States::all();
        $cities = Cities::all();
        
        return view('meusPets.edit')
                ->with('pets', $pets)
                ->with('states', $states)
                ->with('cities', $cities);

    }

    public function update($id, PetsFormRequest $request)
    {   
        $pets = Pets::find($id);

        $pets->name = ucfirst($request->name);
        $pets->age = $request->age;
        $pets->size = $request->size;
        $pets->description = ucfirst($request->description);

        $pets->update();

        return to_route('meusPets.index');
    }

    public function destroy(Pets $id)
    {
        $id->delete();

        return to_route('meusPets.index');
    }

    public function allPets(): View
    {
        $pets = Pets::all();
        $files = Files::all();
        $cities = Cities::all();
        $files = Files::all();
    
        return view('dashboard')
                ->with('pets', $pets)
                ->with('files', $files)
                ->with('cities', $cities)
                ->with('files', $files);
    }
}

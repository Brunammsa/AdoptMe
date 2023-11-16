<?php

namespace App\Http\Controllers;

use App\Models\Cities;

class ApiStateController extends Controller
{
    public function city($id)
    {
        $cities = Cities::where('state_id', $id)->get();

        return $cities;
    }
}

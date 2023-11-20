<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cities;

class ApiStateController extends Controller
{
    public function city($id)
    {
        $cities = Cities::where('state_id', $id)->get();

        return $cities;
    }
}

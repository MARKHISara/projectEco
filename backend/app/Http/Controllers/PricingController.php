<?php

namespace App\Http\Controllers;

use App\Models\Service;

class PricingController extends Controller
{
    public function index()
    {
        return response()->json(Service::all());
    }
}

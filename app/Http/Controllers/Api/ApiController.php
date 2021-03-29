<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Bike;

class ApiController extends Controller
{
public function getFirstBikes() {

    $firstBikes = Bike::orderBy('id', 'asc')->first();

    return response()->json($firstBikes);
}
}

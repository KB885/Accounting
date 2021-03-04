<?php

namespace App\Http\Controllers\Integration;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class IntegrationController extends Controller
{
    public function index(Team $team)
    {
       return view('app.integration.index', compact('team'));
    }
}

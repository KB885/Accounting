<?php

namespace App\Http\Controllers\Bank;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function index(Team $team)
    {
       return view('app.bank.index', compact('team'));
    }
}

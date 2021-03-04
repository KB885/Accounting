<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Accounting;
use Illuminate\Http\Request;

class AccountingController extends Controller
{
    public function index(Team $team)
    {
        $accountings = Accounting::query()
            ->select('id', 'name')
            ->orderBy('id')
            ->get();

       return view('app.accounting.index', compact('team', 'accountings'));
    }

    public function create(Team $team)
    {
        return view('app.accounting.create', compact('team'));
    }
}

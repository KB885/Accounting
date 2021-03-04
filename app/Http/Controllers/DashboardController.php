<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Income;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $expenses = Expense::query()
            ->select('id', 'amount')
            ->get();

       $income = Income::query()
            ->select('id', 'amount')
            ->get();

        return view('app.dashboard.index', compact('expenses', 'income'));
    }
}

<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Team;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Team $team)
    {
        $invocies = Invoice::query()
            ->select('id', 'name')
            ->orderBy('id')
            ->get();

       return view('app.invoice.index', compact('team', 'invoices'));
    }
}

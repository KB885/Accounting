<?php

namespace App\Http\Controllers\Company;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $teams = Team::query()
            ->where('user_id', Auth::user()->id)
            ->select('id', 'name')
            ->orderBy('id')
            ->get();

        return view('app.company.index', compact('teams'));
    }

    public function create()
    {
        $countries = Country::query()
            ->select('id', 'name')
            ->orderBy('name')
            ->get();

        return view('app.company.create', compact('countries'));
    }

    public function show(Team $team)
    {
        return view('app.company.show', compact('team'));
    }

    public function store(Request $request)
    {
        // Validation

        Team::create([
            'name' => $request->name,
            'street' => $request->street,
            'zipCode' => $request->zipCode,
            'city' => $request->city,
            'country_id' => $request->country,
            'user_id' => Auth::user()->id,
        ]);

        // send mail

       return redirect(route('company.index'));
    }
}

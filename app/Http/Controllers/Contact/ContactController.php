<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Team;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Team $team)
    {
        $contacts = Contact::query()
            ->select('id', 'name')
            ->orderBy('id')
            ->get();

        return view('app.contact.index', compact('team', 'contacts'));
    }

    public function create(Team $team)
    {
        return view('app.contact.create', compact('team'));
    }

    public function store(Request $request)
    {
        return redirect(route('contact.index'));
    }

    public function show(Team $team, Contact $contact)
    {
        return view('app.contact.show', compact('team', 'contact'));
    }
}

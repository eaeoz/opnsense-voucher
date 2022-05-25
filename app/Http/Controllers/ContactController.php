<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use DB;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(60);

        return view('contacts.index', compact('contacts'));
    }
	public function contactprint()
	{
		$contacts = Contact::paginate(60);
		return view('contacts.printpage', compact('contacts'));
	}
	public function truncatetable()
	{
		DB::table('contacts')->truncate();
		return View('contacts.truncate')
        ->with('success', 'Truncate Done');
	}
}

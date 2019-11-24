<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index (Request $request) {
        $search = $request->search;

        $contacts = Contacts::where('full_name', 'like', "%$search%")
            ->paginate(10);

        return view('list', [
            'contacts' => $contacts,
            'search' => $search,
        ]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|min:4|max:60',
            'exhibition_name' => 'required|min:4|max:35',
            'email' => 'min:6|max:45',
            'telephone_number' => 'min:10|max:10',
            'cell_phone_number' => 'min:10|max:11',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $contacts = new Contacts;

        $contacts->full_name = $request->full_name;
        $contacts->exhibition_name = $request->exhibition_name;
        $contacts->email = $request->email;
        $contacts->telephone_number = $request->telephone_number;
        $contacts->cell_phone_number = $request->cell_phone_number;
        $contacts->email = $request->email;

        $contacts->save();

        return redirect()->route('contacts.index');
    }
}

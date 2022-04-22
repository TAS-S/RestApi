<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactStoreRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request)
    {

        Contact::create([
            'name' => $request->name,
            'NIP' => $request->NIP,
            'address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip_code
        ]);

        return to_route('contacts.index')->with('message', 'Contact created successfully.');;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts = Contact::findOrFail($id);

        return view('contacts.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactStoreRequest $request, $id)
    {
        $contacts = Contact::findOrFail($id);

        // $request->validate([
        //     'name'=>'required',
        //     'NIP'=>'required|digits:10',
        //     'address'=>'required',
        //     'city'=>'required',
        //     'zip_code'=>'required'
        // ]);

        $contacts->name = $request->name;
        $contacts->NIP = $request->NIP;
        $contacts->address = $request->address;
        $contacts->city = $request->city;
        $contacts->zip_code = $request->zip_code;
        $contacts->update();

        return to_route('contacts.index')->with('message', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();

        return to_route('contacts.index')->with('message', 'Contact deleted successfully.');
    }
}

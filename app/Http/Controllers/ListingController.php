<?php

namespace App\Http\Controllers;
use App\Models\listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    // SHow all listings
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(2)
        ]);
    }
    //Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show',[
            'listing' => $listing
        ]);

    }

    // Show Create Form
    public function create()
    {
        return view('listings.create');
    }

    // Store Listing Data
    public function store(Request $request)
    {
        dd($request->file('logo'));
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            // 'logo' => ['required', 'file', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        // if($request->hasFile('logo')) {
        //     $file = $request->file('logo');
        //     // Debugging info
        //     info('File Details: ', [
        //         'name' => $file->getClientOriginalName(),
        //         'mime' => $file->getClientMimeType(),
        //         'size' => $file->getSize(),
        //     ]);
        
        //     $formFields['logo'] = $file->store('public');
        // }

        // if($request->hasFile('logo')){
        //     $formFields['logo'] = $request->file('logo')->store('logos','public');
        // }

        Listing::create($formFields);
        


        return redirect('/')->with('message', 'Listing created successfully!');
    }

    // Show Edit Form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }
}

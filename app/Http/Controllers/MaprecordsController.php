<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;

class MaprecordsController extends Controller
{

    public function index()
    {
        $data['Locatorapps'] = location::orderBy('id', 'asc')->paginate(10);

        return view('Locatorapps.index', $data);
    }

    public function create()
    {
        return view('Locatorapps.create');
    }

    public function store(Request $request)
    {

            location::create([
                'location'=> $request->location,
                'address'=> $request->address,
                'capacity'=> $request->capacity,
                'name'=>$request->name,
                'latitude'=>$request->latitude,
                'longtitude'=>$request->longtitude,
                'contact'=>$request->contact
            ]);
            return redirect('Locatorapps');

    }

    public function show(location $location)
    {
        return view('Locatorapps.show', compact('location'));
    }

    public function edit(location $location, $id)
    {
        $location = location::find($id);
        return view('Locatorapps.edit', compact('location'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'Location' => 'required',
            'address' => 'required',
            'capacity' => 'required',
            'name' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
            'contact' => 'required'
        ]);

        $location = Location::find($id);

        // $company->name = $request->name;
        // $company->email = $request->email;
        // $company->address = $request->address;

        $location->update([
            'Location' => $request->location,
            'address' => $request->address,
            'capacity' => $request->capacity,
            'name' => $request->name,
            'latitude' => $request->latitute,
            'longtitude' => $request->longtitude,
            'contact' => $request->contact,
        ]);

        return redirect()->route('Locatorapps.index')
            ->with('success', 'Company Has Been updated successfully');
    }

    public function destroy(location $location, $id)
    {
        $location = location::find($id);
        $location->delete();

        return redirect()->route('Locatorapps.index')
            ->with('success', 'Company has been deleted successfully');
    }


}

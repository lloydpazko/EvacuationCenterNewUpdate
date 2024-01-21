<?php

namespace App\Http\Controllers;
use App\Models\location;
use Illuminate\Http\Request;

class ViewMapUserOnlyController extends Controller
{
    public function ViewLocations()
    {
        $data['ViewMaps'] = location::orderBy('id', 'asc')->paginate(10);

        return view('ViewMaps.Viewmapslocation', $data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stuff;
use App\Price;

class SurveyorController extends Controller
{
    public function index()
    {
        $stuff = Stuff::all();
        return view('surveyor.index', compact('stuff'));
    }

    public function stuff($id)
    {
        $stuff = Stuff::findOrFail($id);
        return view('surveyor.stuff', compact('stuff'));
    }

    public function stuffPrice(Request $request,$id)
    {
        $price = new Price;
        $price->price = $request->price;
        $price->stuff_id = $id;
        $price->price_date = $request->price_date;
        $price->save();
        return redirect()->back();
    }
}

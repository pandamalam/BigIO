<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stuff;
Use App\Price;
class AdminController extends Controller
{
    public function index()
    {
        $stuff = Stuff::all();
        return view('admin.index', compact('stuff'));
    }

    public function stuff($id)
    {
        $stuff = Stuff::findOrFail($id);
        return view('admin.stuff', compact('stuff'));
    }

    public function stuffPrice(Request $request,$id)
    {
        $price = Price::findOrFail($id);
        if ($request->status == 'rejected') {
            $price->price_status = 'reject';
            $price->save();
        }elseif ('approve') {
            $price->price_status = 'approved';
            $price->save();
        }else{
            return redirect()->back();
        }
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stuff;
use App\Price;
use Carbon\Carbon;

class VisitorController extends Controller
{
    public function index()
    {
        $stuff = Stuff::all();
        return view('visitor.index', compact('stuff'));
    }

    public function stuff($id)
    {
        $stuff = Price::where('stuff_id', $id)->where('price_status', 'approved')->get();
        $start = Carbon::now()->subDays(6);
            $dates = [];
            $chartDatas = [];
            for ($i = 0 ; $i <= 6; $i++) {
                $dates[] = $start->copy()->addDays($i);
                
            }
            foreach ($dates as $key => $date) {
                $price_polos = Price::where('stuff_id', $id)->where('price_status', 'approved')->whereDate('price_date', '=', $date)->sum('price');
                $price_mean = count(Price::where('stuff_id', $id)->where('price_status', 'approved')->whereDate('price_date', '=', $date)->get());
                $values = array(
                    'date' => $date->format('d M'),
                    'data' => $price_mean == 0 ? 0:$price_polos/$price_mean,
                );
                array_push($chartDatas, $values); 
            }
            return view('visitor.stuff', compact('stuff', 'chartDatas'));
        }
}

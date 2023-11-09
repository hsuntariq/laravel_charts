<?php

namespace App\Http\Controllers;

use App\Charts\testChart;
use App\Models\Product;
use Illuminate\Http\Request;

class chartController extends Controller
{
    public function index(){
        $prod = Product::pluck('name','price');
        $chart = new testChart;
        $chart->labels($prod->values());
        $chart->dataset('Products', 'line', $prod->keys())->options([
            'backgroundColor' => 'red',
            'color' => 'blue'
        ]);
        $chart2 = new testChart;
        $chart->labels($prod->values());
        $chart->dataset('Products', 'bar', $prod->keys());
        return view('welcome', compact('chart','chart2'));
    }
}

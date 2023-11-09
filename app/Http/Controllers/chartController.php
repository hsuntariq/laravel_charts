<?php

namespace App\Http\Controllers;

use App\Charts\testChart;
use Illuminate\Http\Request;

class chartController extends Controller
{
    public function index(){
        // display first chart
        $chart = new testChart;
        $chart->labels(['One', 'Two', 'Three', 'Four','One', 'Two', 'Three', 'Four']);
        $chart->dataset('proucts', 'bar', [40, 20.75, 89, 20,43,53,32])->options([
            'color' => '#AE1712',
            'backgroundColor' => 'rgba(231,431,032,0.7)'
        ]);
        $chart->dataset('users', 'line', [4, 3, 2, 1]);
        // display second chart
        $chart2 = new testChart;
        $chart2->labels(['pro1','prod2','prod3']);
        $chart2->dataset('data1','line',[32,43,90])->options([
            'backgroundColor' => 'hotpink'
        ]);
        $chart2->dataset('data2','line',[92,120,100]);
        return view('welcome', compact('chart','chart2'));
    }
}

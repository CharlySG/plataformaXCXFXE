<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class saidi_por_causa extends Controller
{
    public function init(){
    	$Datos= DB::table('datos')->select(DB::raw('Causa, count(Causa) as NI, sum(TIU) as Total '));
    	$Datos->groupBy('Causa');
    	$Datos->havingRaw('COUNT(Causa) = NI ');
    	$Datos = $Datos->get();
        $uno=DB::table('datos')->select(DB::raw('count(Causa) as NI,sum(TIU) as SAIDI'));
		$uno=$uno->get();
		return response()->json([
			'html' => view('reportes.saidi_por_causa',compact('Datos','uno'))->render()
		],200);
    }
}

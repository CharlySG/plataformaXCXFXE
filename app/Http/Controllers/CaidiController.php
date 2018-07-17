<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CaidiController extends Controller
{
    
    public function CAIDI(){
$Datos=DB::table('datos')->select(DB::raw('sum(DEMUA)/sum(Usuario) as CAIDI'));
$Datos=$Datos->where('Area','=','F');
$Datos->groupBy('Mes');
$Datos=$Datos->get();

$urbana=DB::table('datos')->select(DB::raw('sum(DEMUA)/sum(Usuario) as CAIDI'));
$urbana=$urbana->where('Area','=','G');
$urbana->groupBy('Mes');
$urbana=$urbana->get();

$villaflores=DB::table('datos')->select(DB::raw('sum(DEMUA)/sum(Usuario) as CAIDI'));
$villaflores=$villaflores->where('Area','=','H');
$villaflores->groupBy('Mes');
$villaflores=$villaflores->get();

$cintalapa=DB::table('datos')->select(DB::raw('sum(DEMUA)/sum(Usuario) as CAIDI'));
$cintalapa=$cintalapa->where('Area','=','I');
$cintalapa->groupBy('Mes');
$cintalapa=$cintalapa->get();

$bochil=DB::table('datos')->select(DB::raw('sum(DEMUA)/sum(Usuario) as CAIDI'));
$bochil=$bochil->where('Area','=','J');
$bochil->groupBy('Mes');
$bochil=$bochil->get();

    	return view('caidi',compact('Datos','urbana','villaflores','cintalapa','bochil'));
    }
}

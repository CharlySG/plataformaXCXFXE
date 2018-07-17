<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OtherController extends Controller
{

    public function MANTTO(){

$Datos=DB::table('datos')->select(DB::raw('Area as AREA,sum(TIU) as SAIDI'));
$Datos=$Datos->where('Area','=','F');
$Datos->groupBy('Area','Mes');
$Datos=$Datos->get();

$Dat=DB::table('datos')->select(DB::raw('sum(TIU) as SAIDI'));
$Dat=$Dat->where('Area','=','F');
$Dat=$Dat->get();

$libros=DB::table('datos')->select(DB::raw('sum(TIU) as SAIDI'));
$libros=$libros->where('Area','=','G');
$libros->groupBy('Area','Mes');
$libros=$libros->get();

$Da=DB::table('datos')->select(DB::raw('sum(TIU) as SAIDI'));
$Da=$Da->where('Area','=','G');
$Da=$Da->get();

$manzana=DB::table('datos')->select(DB::raw('Area as AREA,sum(TIU) as SAIDI'));
$manzana=$manzana->where('Area','=','H');
$manzana->groupBy('Area','Mes');
$manzana=$manzana->get();

$Duno=DB::table('datos')->select(DB::raw('sum(TIU) as SAIDI'));
$Duno=$Duno->where('Area','=','H');
$Duno=$Duno->get();

$cintalapa=DB::table('datos')->select(DB::raw('Area as AREA,sum(TIU) as SAIDI'));
$cintalapa=$cintalapa->where('Area','=','I');
$cintalapa->groupBy('Area','Mes');
$cintalapa=$cintalapa->get();

$cin=DB::table('datos')->select(DB::raw('sum(TIU) as SAIDI'));
$cin=$cin->where('Area','=','I');
$cin=$cin->get();

$bochil=DB::table('datos')->select(DB::raw('Area as AREA,sum(TIU) as SAIDI'));
$bochil=$bochil->where('Area','=','J');
$bochil->groupBy('Area','Mes');
$bochil=$bochil->get();

$bo=DB::table('datos')->select(DB::raw('sum(TIU) as SAIDI'));
$bo=$bo->where('Area','=','J');
$bo=$bo->get();

$lineas=DB::table('datos')->select(DB::raw('Area as AREA,sum(TIU) as SAIDI'));
$lineas=$lineas->where('Area','=','W');
$lineas->groupBy('Area','Mes');
$lineas=$lineas->get();

$lin=DB::table('datos')->select(DB::raw('sum(TIU) as SAIDI'));
$lin=$lin->where('Area','=','W');
$lin=$lin->get();

$lis=DB::table('datos')->select(DB::raw('sum(TIU) as SAIDI'));
$lis->groupBy('Mes');
$lis=$lis->get();

$uno=DB::table('datos')->select(DB::raw('count(Causa) as NI,sum(TIU) as SAIDI'));
        $uno=$uno->get();



    	return view('mantto',compact('Datos','Dat','Da','libros','manzana','Duno',
    'cintalapa','cin','bochil','bo','lineas','lin','lis','uno'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class meta_vs_real extends Controller
{

    public function saidi_meta(){

$Datos=DB::table('datos')->select(DB::raw('Area as AREA,sum(TIU) as SAIDI'));
$Datos=$Datos->where('Area','=','F');
$Datos->groupBy('Area','Mes');
$value = str_limit('MANTTO', 5);
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


        return response()->json([
        'html' => view('reportes.saidi_meta',compact('Datos','Dat','Da','libros','manzana','Duno',
      'cintalapa','cin','bochil','bo','lineas','lin','lis','uno'))->render()
        ],200);

    // 	return view('mantto',compact('Datos','Dat','Da','libros','manzana','Duno',
    // 'cintalapa','cin','bochil','bo','lineas','lin','lis','uno'));
    }

    public function saifi_meta(){

$foranea=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$foranea=$foranea->where('Area','=','F');
$foranea->groupBy('Mes');
$foranea=$foranea->get();

$Totalforanea=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$Totalforanea=$Totalforanea->where('Area','=','F');
$Totalforanea=$Totalforanea->get();

$urbana=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$urbana=$urbana->where('Area','=','G');
$urbana->groupBy('Mes');
$urbana=$urbana->get();

$Total=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$Total=$Total->where('Area','=','G');
$Total=$Total->get();

$villaflores=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$villaflores=$villaflores->where('Area','=','H');
$villaflores->groupBy('Mes');
$villaflores=$villaflores->get();

$totalvillaflores=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$totalvillaflores=$totalvillaflores->where('Area','=','H');
$totalvillaflores=$totalvillaflores->get();

$cintalapa=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$cintalapa=$cintalapa->where('Area','=','I');
$cintalapa->groupBy('Mes');
$cintalapa=$cintalapa->get();

$totalcinta=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$totalcinta=$totalcinta->where('Area','=','I');
$totalcinta=$totalcinta->get();

$bochil=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$bochil=$bochil->where('Area','=','J');
$bochil->groupBy('Mes');
$bochil=$bochil->get();

$totalbochil=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$totalbochil=$totalbochil->where('Area','=','J');
$totalbochil=$totalbochil->get();

$lts=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$lts=$lts->where('Area','=','W');
$lts->groupBy('Mes');
$lts=$lts->get();

$totallts=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$totallts=$totallts->where('Area','=','W');
$totallts=$totallts->get();

$meta_mes=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$meta_mes->groupBy('Mes');
$meta_mes=$meta_mes->get();

$total_meta=DB::table('datos')->select(DB::raw('sum(Usuario)/avg(Usuario_Promedio) as SAIFI'));
$total_meta=$total_meta->get();

return response()->json([
'html' => view('reportes.saifi_meta',compact('foranea','Totalforanea','urbana','Total','villaflores',
  'totalvillaflores','cintalapa','totalcinta','bochil','totalbochil','lts','totallts','meta_mes','total_meta'))->render()
],200);

   // return view('saifi',compact('foranea','Totalforanea','urbana','Total','villaflores',
   //   'totalvillaflores','cintalapa','totalcinta','bochil','totalbochil','lts','totallts','meta_mes','total_meta'));
  }

    public function caidi_meta(){

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

return response()->json([
'html' => view('reportes.caidi_meta',compact('Datos','urbana','villaflores','cintalapa','bochil'))->render()
],200);

// return view('caidi',compact('Datos','urbana','villaflores','cintalapa','bochil'));
}

public function ni_meta(){

    $foranea=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
		$foranea=$foranea->where('Area','=','F');
		$foranea->groupBy('Mes');
		$foranea=$foranea->get();

	  $Tforanea=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
    $Tforanea=$Tforanea->where('Area','=','F');
	  $Tforanea=$Tforanea->get();

	  $urbana=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
		$urbana=$urbana->where('Area','=','G');
		$urbana->groupBy('Mes');
		$urbana=$urbana->get();

		$Turbana=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
    $Turbana=$Turbana->where('Area','=','G');
	  $Turbana=$Turbana->get();

	  $villaflores=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
		$villaflores=$villaflores->where('Area','=','H');
		$villaflores->groupBy('Mes');
		$villaflores=$villaflores->get();

		$Tvillaflores=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
    $Tvillaflores=$Tvillaflores->where('Area','=','H');
	  $Tvillaflores=$Tvillaflores->get();

	  $cintalapa=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
		$cintalapa=$cintalapa->where('Area','=','I');
		$cintalapa->groupBy('Mes');
		$cintalapa=$cintalapa->get();

		$Tcintalapa=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
    $Tcintalapa=$Tcintalapa->where('Area','=','I');
	  $Tcintalapa=$Tcintalapa->get();

	  $bochil=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
		$bochil=$bochil->where('Area','=','J');
		$bochil->groupBy('Mes');
		$bochil=$bochil->get();

		$Tbochil=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
    $Tbochil=$Tbochil->where('Area','=','J');
	  $Tbochil=$Tbochil->get();

	  $lts=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
		$lts=$lts->where('Area','=','W');
		$lts->groupBy('Mes');
		$lts=$lts->get();

		$Tlts=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
    $Tlts=$Tlts->where('Area','=','W');
	  $Tlts=$Tlts->get();

	  $mensual=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
		$mensual->groupBy('Mes');
		$mensual=$mensual->get();

		$totalregistros=DB::table('datos')->select(DB::raw('count(Causa) as NI'));
		$totalregistros=$totalregistros->get();

    return response()->json([
    'html' => view('reportes.ni_meta',compact('foranea','Tforanea','urbana','Turbana','villaflores',
    'Tvillaflores','cintalapa','Tcintalapa','bochil','Tbochil','lts','Tlts',
    'mensual','totalregistros'))->render()
    ],200);

     	// return view ('ni',compact('foranea','Tforanea','urbana','Turbana','villaflores',
     	// 	'Tvillaflores','cintalapa','Tcintalapa','bochil','Tbochil','lts','Tlts',
     	// 	'mensual','totalregistros'));
     }

    public function upa_meta(){
$Datos=DB::table('datos')->select(DB::raw('sum(Usuario)/count(Causa) as UPA'));
$Datos=$Datos->where('Area','=','F');
$Datos->groupBy('Mes');
$Datos=$Datos->get();

$urbana=DB::table('datos')->select(DB::raw('sum(Usuario)/count(Causa) as UPA'));
$urbana=$urbana->where('Area','=','G');
$urbana->groupBy('Mes');
$urbana=$urbana->get();

$villaflores=DB::table('datos')->select(DB::raw('sum(Usuario)/count(Causa) as UPA'));
$villaflores=$villaflores->where('Area','=','H');
$villaflores->groupBy('Mes');
$villaflores=$villaflores->get();

$cintalapa=DB::table('datos')->select(DB::raw('sum(Usuario)/count(Causa) as UPA'));
$cintalapa=$cintalapa->where('Area','=','I');
$cintalapa->groupBy('Mes');
$cintalapa=$cintalapa->get();

$bochil=DB::table('datos')->select(DB::raw('sum(Usuario)/count(Causa) as UPA'));
$bochil=$bochil->where('Area','=','J');
$bochil->groupBy('Mes');
$bochil=$bochil->get();

return response()->json([
'html' => view('reportes.upa_meta',compact('Datos','urbana','villaflores','cintalapa',
  'bochil'))->render()
],200);

    }

}

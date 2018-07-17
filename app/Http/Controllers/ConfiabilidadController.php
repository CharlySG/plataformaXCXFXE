<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ConfiabilidadController extends Controller
{
    
  public function CONFI(){

$Datos=DB::table('datos')->select(DB::raw('Area as AREA,Mes as Mes,count(Mes) as NI,sum(TIU) as SAIDI,
	sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOSAFECTADOS,Usuario_Promedio as USUARIOZONA,sum(Usuario)/Usuario_Promedio as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Mes) as TPR,sum(Usuario)/count(Mes) as UPA'));
$Datos->groupBy('Area','Mes','Usuario_Promedio');
$Datos=$Datos->get();

$Total=DB::table('datos')->select(DB::raw('count(Causa) as NI,sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOSAFECTADOS,avg(Usuario_Promedio) as USUARIOZONA,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA'));
$Total=$Total->get();


  	return view('confi',
  		['Datos'=>$Datos],['Total'=>$Total]
  );
  }

}

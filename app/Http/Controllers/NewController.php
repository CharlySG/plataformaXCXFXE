<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewController extends Controller
{
   
     public function LMX(){
       
       $Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','LMX');
        $Datos=$Datos->get();

    $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','LMX');
    $Total=$Total->get();

        return view('lmx',
        ['Datos'=>$Datos],
        ['Total'=>$Total]
        
        );
    }


    public function GIA(){

    	$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','GIA');
        $Datos=$Datos->get();

        $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','GIA');
    $Total=$Total->get();

    	

    	return view('gia',
    	['Datos'=>$Datos],['Total'=>$Total]    	
    );
    }

    		public function TGD(){

$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','TGD');
        $Datos=$Datos->get();

        $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','TGD');
    $Total=$Total->get();

    			return view('tgd',
    				['Datos'=>$Datos],['Total'=>$Total]
    		);
    		}

    public function JUY(){
     
$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','JUY');
        $Datos=$Datos->get();

         $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));    
    $Total=$Total->where('SE','=','JUY');
    $Total=$Total->get();



    	return view('jui',
    		['Datos'=>$Datos],['Total'=>$Total]
    );
    }

    public function VFD(){

$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','VFD');
        $Datos=$Datos->get();

         $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','VFD');
    $Total=$Total->get();

    	return view('vfd',
    	['Datos'=>$Datos],['Total'=>$Total]
    );
    }

    public function RDB(){
    	$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','RDB');
        $Datos=$Datos->get();


         $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','RDB');
    $Total=$Total->get();


    	return view('rdb',
    	['Datos'=>$Datos],['Total'=>$Total]
    );
    }

    public function TGU(){

    	$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','TGU');
        $Datos=$Datos->get();

          $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','TGU');
    $Total=$Total->get();

    	return view('tgu',
    		['Datos'=>$Datos],['Total'=>$Total]
    );
    }

    public function TXN(){
    	$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','TXN');
        $Datos=$Datos->get();

 $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','TXN');
    $Total=$Total->get();

    	return view('txn',
    		['Datos'=>$Datos],['Total'=>$Total]
    );
    }

    public function TXS(){
    	$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','TXS');
        $Datos=$Datos->get();

$Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','TXS');
    $Total=$Total->get();

    	return view('txs',
    		['Datos'=>$Datos],['Total'=>$Total]
    );
    }

    public function OCZ(){

    	$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','OCZ');
        $Datos=$Datos->get();
        
$Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','OCZ');
    $Total=$Total->get();

    	return view('ocz',
    		['Datos'=>$Datos],['Total'=>$Total]
    );
    }

    public function IPD(){
    	$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','IPD');
        $Datos=$Datos->get();

$Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','IPD');
    $Total=$Total->get();


    	return view('ipd',
    		['Datos'=>$Datos],['Total'=>$Total]
    );
    }

    public function LGZ(){
    	$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','LGZ');
        $Datos=$Datos->get();

        $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','LGZ');
    $Total=$Total->get();

    	return view('lgz',
    		['Datos'=>$Datos],['Total'=>$Total]
    );
    }

    	public function CIT(){
$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','CIT');
        $Datos=$Datos->get();

 $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','CIT');
    $Total=$Total->get();

        return view('cit',
        	['Datos'=>$Datos],['Total'=>$Total]
    );
    	}

	 public function MAA(){
	 	$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','MAA');
        $Datos=$Datos->get();
$Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','MAA');
    $Total=$Total->get();


 	return view('maa',
 		['Datos'=>$Datos],['Total'=>$Total]
 );
 }

 		public function COP(){
$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','COP');
        $Datos=$Datos->get();

$Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','COP');
    $Total=$Total->get();

 			return view('cop',
 				['Datos'=>$Datos],['Total'=>$Total]
 		);
 		}

 		public function MPE(){
$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','MPE');
        $Datos=$Datos->get();

$Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','MPE');
    $Total=$Total->get();

 			return view('mpe',
 				['Datos'=>$Datos],['Total'=>$Total]
 		);
 		}

 		public function PED(){
$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','PED');
        $Datos=$Datos->get();

$Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','PED');
    $Total=$Total->get();

 			return view('ped',
 				['Datos'=>$Datos],['Total'=>$Total]
 		);
 		}

 		public function SMJ(){
 			$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','SMJ');
        $Datos=$Datos->get();

        $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','SMJ');
    $Total=$Total->get();

 			return view('smj',
 				['Datos'=>$Datos],['Total'=>$Total]
 		);
 		}

 		public function AAA(){
 			$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','AAA');
        $Datos=$Datos->get();

         $Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','AAA');
    $Total=$Total->get();

 			return view('aaa',
 				['Datos'=>$Datos],['Total'=>$Total]
 		);
 		}

 		public function SOY(){
 			$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','SOY');
        $Datos=$Datos->get();

$Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','SOY');
    $Total=$Total->get();
 			return view('soy',
 				['Datos'=>$Datos],['Total'=>$Total]
 		);
 		}

 		public function ANG(){
 			$Datos=DB::table('datos')->select(DB::raw('SE as SE,Circuito as CIRCUITO,Ramal as RAMAL,Causa as CAUSA,1 as NI,TIU as SAIDI,Duracion as DURACION,DEMUA as DEMUA,Usuario as USUARIOS,Usuario/Usuario_Promedio as SAIFI,DEMUA/Usuario as CAIDI,Duracion/1 as TPR,Usuario/1 as UPA'));
        $Datos=$Datos->where('SE','=','ANG');
        $Datos=$Datos->get();

$Total=DB::table('datos')->select(DB::raw('count(Causa) as NI, sum(TIU) as SAIDI,sum(Duracion) as DURACION,sum(DEMUA) as DEMUA,sum(Usuario) as USUARIOS,sum(Usuario/Usuario_Promedio) as SAIFI,sum(DEMUA)/sum(Usuario) as CAIDI,sum(Duracion)/count(Causa) as TPR,sum(Usuario)/count(Causa) as UPA '));
    $Total=$Total->where('SE','=','ANG');
    $Total=$Total->get();

 			return view('ang',
 				['Datos'=>$Datos],['Total'=>$Total]
 		);
 		}

}


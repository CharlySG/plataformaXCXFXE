<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class saidi_por_causa extends Controller
{
    public function init(Request $_request)
    {
        $Datos = DB::table('datos')->select(DB::raw('Causa, count(Causa) as NI, sum(TIU) as Total '));
        $Datos->groupBy('Causa');
        $Datos->havingRaw('COUNT(Causa) = NI ');

        $uno = DB::table('datos')->select(DB::raw('count(Causa) as NI,sum(TIU) as SAIDI'));
        $uno = $uno->get();

        if ($_request->has('Order')) {
            switch ($_request->Order) {
                case 1:
                    $Datos = $Datos->orderBy('NI', 'asc')->get();
                    $Message = 'Ordenado Ascendente';
                    break;

                case 2:
                    $Message = 'Ordenado Descendente';
                    $Datos = $Datos->orderBy('NI', 'desc')->get();
                    break;
            }
            return response()->json([
                'message' => $Message,
                'html' => view('tables.saidi_por_causa_table', compact('Datos', 'uno'))->render(),
            ], 200);
        } else {
            $Datos = $Datos->get();

            return response()->json([
                'html' => view('reportes.saidi_por_causa', compact('Datos', 'uno'))->render(),
            ], 200);
        }
    }
}

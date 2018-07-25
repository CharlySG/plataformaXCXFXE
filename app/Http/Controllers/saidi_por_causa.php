<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\saidi_causa_description;

class saidi_por_causa extends Controller
{
    public function init(Request $_request)
    {
        $SAIDIobj = new saidi_causa_description;
        $Datos = $SAIDIobj->generateReportCauseSaidi($_request);
        $uno = DB::table('datos')->select(DB::raw('count(Causa) as NI,sum(TIU) as SAIDI'));
        $uno = $uno->get();

        if ($_request->has('Order')) {
            switch ($_request->Order) {
                case 1:
                    $Message = 'Ordenado Descendente';
                    break;
                case 2:
                    $Message = 'Ordenado Ascendente';
                    break;
            }
            return response()->json([
                'message' => $Message,
                'html' => view('tables.saidi_por_causa_table', compact('Datos', 'uno'))->render(),
            ], 200);
        } else {
            return response()->json([
                'html' => view('reportes.saidi_por_causa', compact('Datos', 'uno'))->render(),
            ], 200);
        }
    }
}

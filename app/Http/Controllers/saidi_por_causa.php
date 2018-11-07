<?php

namespace App\Http\Controllers;

use DB;
use Excel;
use Storage;
use App\Dato;
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

    public function upgradeDatos(Request $request){
        $file = $request->file('fileExcel');
        $OriginalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $validate = Storage::disk('Archivos')->put($OriginalName, \File::get($file));
        $route = storage_path('Archivos') ."/". $OriginalName;
       
        if($validate){
            Dato::truncate();
            Excel::selectSheetsByIndex(7)->load($route, function($sheet){
                // dd($sheet->all());
                $sheet->each(function($row){
                    $DATO=new Dato;
                    $DATO->Division = $row->division;
                    $DATO->Zona = $row->zona;
                    $DATO->Status = $row->status;
                    $DATO->Numero = $row->numero;
                    $DATO->Anio = $row->anio;
                    $DATO->Mes = $row->mes;
                    $DATO->Area = $row->area;
                    $DATO->Ciudad = $row->ciudad;
                    $DATO->SE = $row->se;
                    $DATO->Circuito = $row->circuito;
                    $DATO->Fecha_Inici = $row->fecha_inici;
                    $DATO->Fecha_Term = $row->fecha_term;
                    $DATO->Hora_Ini = $row->hora_ini;
                    $DATO->Hora_Term = $row->hora_term;
                    $DATO->Demanda = $row->demanda;
                    $DATO->Usuario = $row->usuario;
                    $DATO->Ramal = $row->ramal;
                    $DATO->PUR = $row->pur;
                    $DATO->Material = $row->material;
                    $DATO->Causa = $row->causa;
                    $DATO->Entidad = $row->entidad;
                    $DATO->Proceso = $row->proceso;
                    $DATO->Continuada = $row->continuada;
                    $DATO->DEMUA = $row->demua;
                    $DATO->Duracion = $row->duracion;
                    $DATO->TIU = $row->tiu;
                    $DATO->Usuario_Promedio = $row->usuario_promedio;
                    $DATO->TLU_Real = $row->tlu_real;
                    $DATO->EDV = $row->edv;
                    $DATO->Afectacion = $row->afectacion;
                    $DATO->Tipo_Tramo = $row->tipo_tramo;
                    $DATO->Tramo_Trocal = $row->tramo_trocal;
                    $DATO->Tramo_Ramal = $row->tramo_ramal;
                    $DATO->Atendido_Por = $row->atendido_por;
                    $DATO->Con_Sin_Evento = $row->con_sin_evento;
                    $DATO->Num_Evento = $row->num_evento;
                    $DATO->Falla_Renuante = $row->falla_renuante;
                    $DATO->Solicitud = $row->solicitud;
                    $DATO->Orden_Sicoss = $row->orden_sicoss;
                    $DATO->save();
                });
            });
            return response()->json([
                'message' => 'Datos Cargados con éxito'
            ],200);
        }
    }
}

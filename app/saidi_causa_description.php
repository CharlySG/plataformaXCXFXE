<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class saidi_causa_description extends Model
{
    protected $table ='saidi_causa_description';
    public $timestamps = false;

    public function generateReportCauseSaidi($request){
        $selectRaw = "CONCAT_WS(' ',D.Causa, S.descripcion) Causa, count(D.Causa) as NI, sum(TIU) Total";
        $queryBody = DB::table(DB::raw("datos as D"))->selectRaw($selectRaw);
        $queryBody->leftJoin(DB::raw('(select id, descripcion from saidi_causa_description) as S'),'S.id','=','D.Causa');
        $queryBody->groupBy('Causa');
        $queryBody->havingRaw('COUNT(Causa) = NI ');
        switch ($request->Order) {
            case 1:
                $queryBody->orderBy('NI','des');
                break;
            case 1:
                $queryBody->orderBy('NI','asc');
                break;
            default:
                $queryBody->orderBy('NI', 'asc');
                break;
        }
        return $queryBody->get();
    }
}

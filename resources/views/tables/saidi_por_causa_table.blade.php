@foreach($Datos as $D)
<tr>
    <td >{{$D->Causa}}</td>
    <td style="text-align:center;">{{$D->NI}}</td>
    <td style="text-align:center;">{{bcdiv($D->Total,'1',3)}} </td>
</tr>
@endforeach @foreach($uno as $u)
<tr class="red lighten-4" style="color:red">
    <td style="text-align:center;">
        <strong>Total</strong>
    </td>
    <td style="text-align:center;">{{$u->NI}} </td>
    <td style="text-align:center;">{{bcdiv($u->SAIDI,'1',3)}} </td>
</tr>
@endforeach

<table class="striped">
    <thead>
        <tr>
            <th scope="col">Causa</th>
            <th scope="col">NI</th>
            <th scope="col">SAIDI</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Datos as $D)
        <tr>
            <td>{{$D->Causa}}</td>
            <td>{{$D->NI}}</td>
            <td>{{$D->Total}} </td>
        </tr>
        @endforeach
        @foreach($uno as $u)
        <tr class="grey darken-3" style="color:white">
            <td><strong>Total</strong></td>
            <td>{{$u->NI}} </td>
            <td>{{$u->SAIDI}} </td>
        </tr>
        @endforeach
    </tbody>
</table>

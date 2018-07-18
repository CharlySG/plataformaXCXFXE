<table class="responsive-table striped">
    <thead>
        <tr>
            <th>Area</th>
            <th>Mes</th>
            <th>NI</th>
            <th>SAIDI</th>
            <th>Duracion</th>
            <th>Demua</th>
            <th>Usrs. Afectados</th>
            <th>Usrs. zona</th>
            <th>SAIFI</th>
            <th>CAIDI</th>
            <th>TPR</th>
            <th>UPA</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Datos as $D)
        <tr>
            <td>{{$D->AREA}}</td>
            <td>{{$D->Mes}}</td>
            <td>{{$D->NI}} </td>
            <td>{{$D->SAIDI}} </td>
            <td>{{$D->DURACION}} </td>
            <td>{{$D->DEMUA}} </td>
            <td>{{$D->USUARIOSAFECTADOS}}</td>
            <td>{{$D->USUARIOZONA}} </td>
            <td>{{$D->SAIFI}} </td>
            <td>{{$D->CAIDI}}</td>
            <td>{{$D->TPR}}</td>
            <td>{{$D->UPA}} </td>
        </tr>
        @endforeach
        @foreach($Total as $T)
        <tr class="grey darken-3" style="color:white">
            <td><strong>Totales</strong></td>
            <td>= </td>
            <td>{{$T->NI}}</td>
            <td>{{$T->SAIDI}} </td>
            <td>{{$T->DURACION}} </td>
            <td>{{$T->DEMUA}}</td>
            <td>{{$T->USUARIOSAFECTADOS}}</td>
            <td>{{$T->USUARIOZONA}}</td>
            <td>{{$T->SAIFI}}</td>
            <td>{{$T->CAIDI}}</td>
            <td>{{$T->TPR}}</td>
            <td>{{$T->UPA}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
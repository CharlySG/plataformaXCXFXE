<center>
	<h1>SAIDI ZONA POR CAUSA </h1><br>

<div class="container">
<table style="width:50%" class="table table-striped">
    <thead>
        <tr class="green darken-4" style="color:white">
            <th>Causa</th>
            <th>NI</th>
            <th>SAIDI</th>
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
        <tr class="red accent-2" style="color:white">
            <td><strong>Total</strong></td>
            <td>{{$u->NI}} </td>
            <td>{{$u->SAIDI}} </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</center>

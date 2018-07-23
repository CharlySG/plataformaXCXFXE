<center>
	<h4 style="color:green">Analisis de Ramales por Circuito AAA</h4>
	<h6 style="color:green">Ramales Por Causa</h6><br>
</center>
  <table class="striped">
  <thead>
    <tr class="green darken-4" style="color:white">
       <th scope="col">SE</th>
      <th scope="col">CIRCUITO</th>
      <th scope="col">RAMAL</th>
      <th scope="col">CAUSA</th>
      <th scope="col">NI</th>
      <th scope="col">SAIDI</th>
      <th scope="col">DURACION</th>
      <th scope="col">DEMUA</th>
      <th scope="col">USUARIOS</th>
      <th scope="col">SAIFI</th>
      <th scope="col">CAIDI</th>
      <th scope="col">TPR</th>
      <th scope="col">UPA</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Datos as $D)
    <tr>
      <td>{{$D->SE}}</td>
     <td>{{$D->CIRCUITO}}</td>
     <td>{{$D->RAMAL}} </td>
     <td>{{$D->CAUSA}} </td>
     <td>{{$D->NI}} </td>
     <td>{{$D->SAIDI}} </td>
     <td>{{$D->DURACION}}</td>
     <td>{{$D->DEMUA}} </td>
     <td>{{$D->USUARIOS}} </td>
     <td>{{$D->SAIFI}}</td>
     <td>{{$D->CAIDI}}</td>
     <td>{{$D->TPR}} </td>
     <td>{{$D->UPA}} </td>
    </tr>
    @endforeach

      @foreach($Total as $T)
    <tr class="red accent-2" style="color:white"><b>
      <td>Total </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td><b>{{ $T->NI}}</b></td>
      <td><b>{{$T->SAIDI}}</b> </td>
      <td><b>{{$T->DURACION}}</b> </td>
      <td><b>{{$T->DEMUA}}</b> </td>
      <td><b>{{$T->USUARIOS}}</b> </td>
      <td><b>{{$T->SAIFI}} </b></td>
      <td><b>{{$T->CAIDI}}</b> </td>
      <td><b>{{$T->TPR}} </b></td>
      <td><b>{{$T->UPA}}</b> </td>  </b>
    </tr>
    @endforeach
    </tbody>
</table>

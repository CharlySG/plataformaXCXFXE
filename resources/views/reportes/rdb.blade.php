<center>
	<h4 style="color:green">Analisis de Ramales por Circuito RDB</h4>
	<h6 style="color:green">Ramales Por Causa</h6><br>
</center>
  <table class="table">
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
  </tbody>

  <tbody>
      @foreach($Total as $T)
      <tr class="red accent-2" style="color:white">
      <td>Total </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td>{{$T->NI}}</td>
      <td>{{$T->SAIDI}} </td>
      <td>{{$T->DURACION}} </td>
      <td>{{$T->DEMUA}} </td>
      <td>{{$T->USUARIOS}} </td>
      <td>{{$T->SAIFI}} </td>
      <td>{{$T->CAIDI}} </td>
      <td>{{$T->TPR}} </td>
      <td>{{$T->UPA}} </td>
    </tr>
    @endforeach
    </tbody>
</table>

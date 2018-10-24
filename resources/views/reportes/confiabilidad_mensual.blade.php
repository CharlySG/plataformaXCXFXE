<center>
  <h4 class="font-italic" style="color:green">CONFIABILIDAD MENSUAL</h4><br>
</center>
<table class="highlight">
  <thead>
    <tr class="green darken-4" style="color:white">
      <th style="text-align:center;">Area</th>
      <th style="text-align:center;">Mes</th>
      <th style="text-align:center;">NI</th>
      <th style="text-align:center;">SAIDI</th>
      <th style="text-align:center;">Duracion</th>
      <th style="text-align:center;">Demua</th>
      <th style="text-align:center;">Usrs. Afectados</th>
      <th style="text-align:center;">Usrs. zona</th>
      <th style="text-align:center;">SAIFI</th>
      <th style="text-align:center;">CAIDI</th>
      <th style="text-align:center;">TPR</th>
      <th style="text-align:center;">UPA</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Datos as $D)
      <tr>
        <td class="green lighten-5" style="text-align:center;">{{$D->AREA}}</td>
        <td style="text-align:center;">{{$D->Mes}}</td>
        <td style="text-align:center;">{{$D->NI}} </td>
        <td style="text-align:center;">{{bcdiv($D->SAIDI,'1',3)}} </td>
        <td style="text-align:center;">{{$D->DURACION}} </td>
        <td style="text-align:center;">{{$D->DEMUA}} </td>
        <td style="text-align:center;">{{$D->USUARIOSAFECTADOS}}</td>
        <td style="text-align:center;">{{$D->USUARIOZONA}} </td>
        <td style="text-align:center;">{{$D->SAIFI}} </td>
        <td style="text-align:center;">{{$D->CAIDI}}</td>
        <td style="text-align:center;">{{$D->TPR}}</td>
        <td style="text-align:center;">{{$D->UPA}} </td>
      </tr>
    @endforeach
    @foreach($Total as $T)
      <tr class="red lighten-4" style="color:red">
        <td style="text-align:center;"><strong>Totales</strong></td>
        <td style="text-align:center;">= </td>
        <td style="text-align:center;">{{$T->NI}}</td>
        <td style="text-align:center;">{{bcdiv($T->SAIDI,'1',3)}} </td>
        <td style="text-align:center;">{{$T->DURACION}} </td>
        <td style="text-align:center;">{{$T->DEMUA}}</td>
        <td style="text-align:center;">{{$T->USUARIOSAFECTADOS}}</td>
        <td style="text-align:center;">{{$T->USUARIOZONA}}</td>
        <td style="text-align:center;">{{$T->SAIFI}}</td>
        <td style="text-align:center;">{{$T->CAIDI}}</td>
        <td style="text-align:center;">{{$T->TPR}}</td>
        <td style="text-align:center;">{{$T->UPA}}</td>
      </tr>
    @endforeach
  </tbody>
</table>

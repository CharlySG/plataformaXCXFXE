@extends('layouts.app')
@section('content')

<center>
	<h1>CONFIABIALIDAD MENSUAL </h1><br>
</center>
<div class="container">
  <table class="table table-striped">
  <thead>
    <tr>
       <th scope="col">Area</th>
      <th scope="col">Mes</th>
      <th scope="col">NI</th>
      <th scope="col">SAIDI</th>
      <th scope="col">Duracion</th>
      <th scope="col">Demua</th>
      <th scope="col">Usuarios Afectados</th>
      <th scope="col">Usu_zona</th>
      <th scope="col">SAIFI</th>      
      <th scope="col">CAIDI</th>
      <th scope="col">TPR</th>
      <th scope="col">UPA</th>
      
      
    
     
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
  </tbody>
  <tbody>
    @foreach($Total as $T)
    <tr>  
      <td>Totales</td>
 
      <td></td>
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
</div>

@endsection


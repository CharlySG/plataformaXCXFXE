@extends('layouts.principalapp')
@section('content')
<div class="col-s6">
  <table class="table table-striped">
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
  </tbody>

  <tbody>
    @foreach($uno as $u)
<tr>
  <td>Total</td>
  <td>{{$u->NI}} </td>
  <td>{{$u->SAIDI}} </td>
</tr>

    @endforeach
  </tbody>
</table>

</div>
@endsection

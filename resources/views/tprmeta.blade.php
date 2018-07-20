@extends('layouts.app')
@section('content')
<center>
	<h2><b> TPR</b></h2>
</center>
<div class="container">
  <table class="table table-striped">
  <thead>
    <tr>
       <th scope="col">AREAS</th>
     	<th scope="col"></th>
      <th scope="col">Ene</th>
      <th scope="col">Feb</th>
      <th scope="col">Mar</th>
      <th scope="col">Abr</th>
      <th scope="col">May</th>
      <th scope="col">Jun</th>
      <th scope="col">Jul</th>
      <th scope="col">Ago</th>
      <th scope="col">Sep</th>
      <th scope="col">Oct</th>
      <th scope="col">Nov</th>
      <th scope="col">Dic</th>
      <th scope="col">Total Acum</th>
    </tr>
      <tr>

      <th scope="col">Foranea</th>
      <th scope="col">META</th>
      <th scope="col">84.000</th>
      <th scope="col">74.000</th>
      <th scope="col">102.000</th>
      <th scope="col">167.000</th>
      <th scope="col">191.000</th>
      <th scope="col">194.000</th>
      <th scope="col">196.000</th>
      <th scope="col">223.000</th>
      <th scope="col">230.000</th>
      <th scope="col">311.000</th>
      <th scope="col">311.000</th>
      <th scope="col">311.000</th>
      <th scope="col"></th>
    </tr>
  </thead>
   <tbody>
   	<tr>
   		<td></td>
   		<td>REAL</td>
  	@foreach($Datos as $D)
	<td>{{$D->SAIFI}} </td>
  	@endforeach
  		</tr>
        <tr>
       <td>Total Acumulado</td>
       <td></td>
    @foreach($Dat as $f)
  <td><b>{{$f->SAIFI}}</b></td>
    @endforeach
      </tr>
  	  	  </tbody>
<thead>
  <tr>
      <th scope="col"></th>
      <th scope="col">META</th>
      <th scope="col">49.000</th>
      <th scope="col">57.000</th>
      <th scope="col">59.000</th>
			<th scope="col">95.000</th>
      <th scope="col">124.000</th>
      <th scope="col">146.000</th>
      <th scope="col">151.000</th>
      <th scope="col">151.000</th>
      <th scope="col">161.000</th>
      <th scope="col">159.000</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
</thead><br>
<tbody>
   <tr>
        <td>URBANA</td>
      <td>REAL</td>
    @foreach($libros as $L)
  <td>{{$L->SAIDI}} </td>
    @endforeach
      </tr>
       <tr>
       <td>Total Acumulado</td>
       <td></td><td></td>
    @foreach($Da as $f)
  <td><b>{{$f->SAIDI}}</b> </td>
    @endforeach
      </tr>
</tbody>
<thead>
  <tr>
    <th scope="col"></th>
      <th scope="col">META</th>
      <th scope="col">0.109</th>
      <th scope="col">0.130</th>
      <th scope="col">0.220</th>
      <th scope="col">1.434</th>
      <th scope="col">1.057</th>
      <th scope="col">0.439</th>
      <th scope="col">0.365</th>
      <th scope="col">0.958</th>
      <th scope="col">0.489</th>
      <th scope="col">0.740</th>
      <th scope="col">0.350</th>
      <th scope="col">0.526</th>
      <th scope="col">6.82</th>
  </tr>
</thead>
<tbody>
   <tr>
        <td>VILLAFLORES</td>
      <td>REAL</td>
    @foreach($manzana as $M)
  <td>{{$M->SAIDI}} </td>
    @endforeach
    </tr>
     <tr>
       <td>Total Acumulado</td>
       <td></td>
    @foreach($Duno as $u)
  <td><b>{{$u->SAIDI}}</b> </td>
    @endforeach
      </tr>
</tbody>
<thead>
  <tr>
    <th scope="col"></th>
      <th scope="col">META</th>
      <th scope="col">0.200</th>
      <th scope="col">0.148</th>
      <th scope="col">0.333</th>
      <th scope="col">1.024</th>
      <th scope="col">0.971</th>
      <th scope="col">0.394</th>
      <th scope="col">0.335</th>
      <th scope="col">0.760</th>
      <th scope="col">0.450</th>
      <th scope="col">0.718</th>
      <th scope="col">0.272</th>
      <th scope="col">0.390</th>
      <th scope="col">6.00</th>
  </tr>
</thead>
<tbody>
  <tr>
        <td>CINTALAPA</td>
      <td>REAL</td>
    @foreach($cintalapa as $c)
  <td>{{$c->SAIDI}} </td>
    @endforeach
    </tr>
<tr>
       <td>Total Acumulado</td>
       <td></td>
    @foreach($cin as $ci)
  <td><b>{{$ci->SAIDI}}</b> </td>
    @endforeach
      </tr>
</tbody>
<thead>
  <tr>
    <th scope="col"></th>
      <th scope="col">META</th>
      <th scope="col">0.139</th>
      <th scope="col">0.151</th>
      <th scope="col">0.174</th>
      <th scope="col">1.743</th>
      <th scope="col">0.967</th>
      <th scope="col">0.333</th>
      <th scope="col">0.308</th>
      <th scope="col">0.553</th>
      <th scope="col">0.427</th>
      <th scope="col">0.690</th>
      <th scope="col">0.228</th>
      <th scope="col">0.365</th>
      <th scope="col">5.08</th>
  </tr>
</thead>
<tbody>
  <tr>
        <td>BOCHIL</td>
      <td>REAL</td>
    @foreach($bochil as $B)
  <td>{{$B->SAIDI}} </td>
    @endforeach
    </tr>
    <tr>
       <td>Total Acumulado</td>
       <td></td>
    @foreach($bo as $v)
  <td><b>{{$v->SAIDI}}</b> </td>
    @endforeach
      </tr>
</tbody>
<thead>
  <tr>
    <th scope="col"></th>
      <th scope="col">META</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
  </tr>
</thead>
<tbody>
  <tr>
        <td>LINEAS</td>
      <td>REAL</td>
    @foreach($lineas as $L)
  <td>{{$L->SAIDI}} </td>
    @endforeach
    </tr>
    <tr>
       <td>Total Acumulado</td>
       <td></td>
    @foreach($lin as $l)
  <td><b>{{$l->SAIDI}}</b> </td>
    @endforeach
      </tr>
</tbody>
<thead>
   <tr>
    <th scope="col"></th>
      <th scope="col">META</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>PROTECC</td>
    <td>REAL</td>
    <td>0.000</td>
     <td>0.000</td>
      <td>0.000</td>
       <td>0.000</td>
        <td>0.000</td>

  </tr>
</tbody>
<thead>
   <tr>
    <th scope="col"></th>
      <th scope="col">META</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>SUBESTA</td>
    <td>REAL</td>
    <td>0.000</td>
     <td>0.000</td>
      <td>0.000</td>
       <td>0.000</td>
        <td>0.000</td>

  </tr>
</tbody>
<thead>
   <tr>
    <th scope="col"></th>
      <th scope="col">META</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
      <th scope="col">0.000</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>CONTROL</td>
    <td>REAL</td>
    <td>0.000</td>
     <td>0.000</td>
      <td>0.000</td>
       <td>0.000</td>
        <td>0.000</td>

  </tr>
</tbody>
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">META</th>
      <th scope="col">1.122</th>
      <th scope="col">1.824</th>
      <th scope="col">3.447</th>
      <th scope="col">10.009</th>
      <th scope="col">15.119</th>
      <th scope="col">17.584</th>
      <th scope="col">19.342</th>
      <th scope="col">24.446</th>
      <th scope="col">26.743</th>
      <th scope="col">30.421</th>
      <th scope="col">32.236</th>
      <th scope="col">34.697</th>
      <th scope="col"></th>
  </tr>
   </thead>
   <tbody>
     <tr>
       <td><center> Meta Mensual</center></td>
       <td>REAL</td>
       @foreach($lis as $lili)
       <td>{{$lili->SAIDI}}</td>
       @endforeach
     </tr>
     <tr>
      <td>SAIDI ALCANZADO</td>
         @foreach($uno as $um)
        <td><b>{{$um->SAIDI}}</b></td>
        @endforeach
       </tr>
     </tbody>
     </table>
     </div>

@endsection

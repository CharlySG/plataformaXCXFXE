@extends('layouts.app')
@section('content')
<center>
	<h2><b> CAIDI </b></h2><br>
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
      </tr>
       <tr>
      <th scope="col">FORANEA</th>
      <th scope="col">META</th>
      <th scope="col">35.000</th>
      <th scope="col">69.000</th>
      <th scope="col">48.167</th>
      <th scope="col">114.467</th>
      <th scope="col">32.839</th>
      <th scope="col">36.278</th>
      <th scope="col">49.250</th>
      <th scope="col">97.000</th>
      <th scope="col">61.857</th>
      <th scope="col">51.000</th>
      <th scope="col">59.250</th>
      <th scope="col">99.667</th>     
    </tr>
</thead>
<tbody>
   	<tr>
   		<td></td>
   		<td>REAL</td>	
  	@foreach($Datos as $D)
	<td>{{$D->CAIDI}}</td>
  	@endforeach  	
  		</tr>
  		</tbody>
  		<thead>
  			<tr>
      <th scope="col">URBANA</th>
      <th scope="col">META</th>
      <th scope="col">133.500</th>
      <th scope="col">67.500</th>
      <th scope="col">101.167</th>
      <th scope="col">102.750</th>
      <th scope="col">37.828</th>
      <th scope="col">32.300</th>
      <th scope="col">50.857</th>
      <th scope="col">98.333</th>
      <th scope="col">49.800</th>
      <th scope="col">54.643</th>
      <th scope="col">54.556</th>
      <th scope="col">116.400</th>     
    </tr>
  		</thead>
  		<tbody>
   	<tr>
   		<td></td>
   		<td>REAL</td>	
  	@foreach($urbana as $urb)
	<td>{{$urb->CAIDI}}</td>
  	@endforeach  	
  		</tr>
  		</tbody>
  		<thead>
  			<tr>
      <th scope="col">VILLAFLORES</th>
      <th scope="col">META</th>
      <th scope="col">54.500</th>
      <th scope="col">65.000</th>
      <th scope="col">44.000</th>
      <th scope="col">119.500</th>
      <th scope="col">36.448</th>
      <th scope="col">25.824</th>
      <th scope="col">60.833</th>
      <th scope="col">73.692</th>
      <th scope="col">69.857</th>
      <th scope="col">61.667</th>
      <th scope="col">58.333</th>
      <th scope="col">105.200</th>     
    </tr>
  		</thead>
  		<tbody>
   	<tr>
   		<td></td>
   		<td>REAL</td>	
  	@foreach($villaflores as $villa)
	<td>{{$villa->CAIDI}}</td>
  	@endforeach  	
  		</tr>
  		</tbody>
  		<thead>
  			<tr>
      <th scope="col">CINTALAPA</th>
      <th scope="col">META</th>
      <th scope="col">50.000</th>
      <th scope="col">74.000</th>
      <th scope="col">66.600</th>
      <th scope="col">73.143</th>
      <th scope="col">53.944</th>
      <th scope="col">30.308</th>
      <th scope="col">83.750</th>
      <th scope="col">58.462</th>
      <th scope="col">64.286</th>
      <th scope="col">71.800</th>
      <th scope="col">90.667</th>
      <th scope="col">130.000</th>     
    </tr>
  		</thead>
  		<tbody>
   	<tr>
   		<td></td>
   		<td>REAL</td>	
  	@foreach($cintalapa as $cin)
	<td>{{$cin->CAIDI}}</td>
  	@endforeach  	
  		</tr>
  		</tbody>
  		<thead>
  			<tr>
      <th scope="col">BOCHIL</th>
      <th scope="col">META</th>
      <th scope="col">46.333</th>
      <th scope="col">75.500</th>
      <th scope="col">58.000</th>
      <th scope="col">67.545</th>
      <th scope="col">69.071</th>
      <th scope="col">37.000</th>
      <th scope="col">102.667</th>
      <th scope="col">69.125</th>
      <th scope="col">71.167</th>
      <th scope="col">76.667</th>
      <th scope="col">76.000</th>
      <th scope="col">182.500</th>     
    </tr>
  		</thead>
  		<tbody>
   	<tr>
   		<td></td>
   		<td>REAL</td>	
  	@foreach($bochil as $bo)
	<td>{{$bo->CAIDI}}</td>
  	@endforeach  	
  		</tr>
  		</tbody>
	</table>	
</div>

@endsection
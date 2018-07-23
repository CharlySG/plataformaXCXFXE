<center>
	<h4 style="color:green">SAIDI</h4>
	<h6 style="color:green">Resultado Meta vs. Real</h6><br>
</center>
<table class="table table-striped">
	<thead>
		<tr class="green darken-4" style="color:white">
			<th>AREAS</th>
			<th></th>
			<th>Ene</th>
			<th>Feb</th>
			<th>Mar</th>
			<th>Abr</th>
			<th>May</th>
			<th>Jun</th>
			<th>Jul</th>
			<th>Ago</th>
			<th>Sep</th>
			<th>Oct</th>
			<th>Nov</th>
			<th>Dic</th>
			<th>Total Acum</th>
		</tr>
		<tr class="green lighten-4">
			<th>Foranea</th>
			<th>META</th>
			<th>0.140</th>
			<th>0.138</th>
			<th>0.289</th>
			<th>1.717</th>
			<th>1.018</th>
			<th>0.653</th>
			<th>0.394</th>
			<th>1.358</th>
			<th>0.433</th>
			<th>0.765</th>
			<th>0.474</th>
			<th>0.598</th>
			<th>7.98</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td>REAL</td>
			@foreach($Datos as $D)
				<td>{{bcdiv($D->SAIDI,'1', 3)}} </td>
			@endforeach
		</tr>
		<tr class="red lighten-4" style="color:black">
			<td>Total Acumulado</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			@foreach($Dat as $f)
				<td style=color:"red"><b>{{bcdiv($f->SAIDI,'1', 3)}}</b></td>
			@endforeach
		</tr>

		<tr class="green lighten-4">
			<th>Urbana</th>
			<th>META</th>
			<th>0.534</th>
			<th>0.135</th>
			<th>0.607</th>
			<th>1.644</th>
			<th>1.097</th>
			<th>0.646</th>
			<th>0.356</th>
			<th>1.475</th>
			<th>0.498</th>
			<th>0.765</th>
			<th>0.491</th>
			<th>0.582</th>
			<th>7.98</th>
		</tr>
		<br>

		<tr>
			<td></td>
			<td>REAL</td>
			@foreach($libros as $L)
				<td>{{bcdiv($L->SAIDI,'1', 3)}} </td>
			@endforeach
		</tr>
		<tr class="red lighten-4" style="color:black">
			<td>Total Acumulado</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			@foreach($Da as $f)
				<td style=color:"red"><b>{{bcdiv($f->SAIDI,'1', 3)}}</b> </td>
			@endforeach
		</tr>


		<tr class="green lighten-4">
			<th>Villaflores</th>
			<th>META</th>
			<th>0.109</th>
			<th>0.130</th>
			<th>0.220</th>
			<th>1.434</th>
			<th>1.057</th>
			<th>0.439</th>
			<th>0.365</th>
			<th>0.958</th>
			<th>0.489</th>
			<th>0.740</th>
			<th>0.350</th>
			<th>0.526</th>
			<th>6.82</th>
		</tr>


		<tr>
			<td></td>
			<td>REAL</td>
			@foreach($manzana as $M)
				<td>{{bcdiv($M->SAIDI,'1', 3)}} </td>
			@endforeach
		</tr>
		<tr class="red lighten-4" style="color:black">
			<td>Total Acumulado</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			@foreach($Duno as $u)
				<td style=color:"red"><b>{{bcdiv($u->SAIDI,'1', 3)}}</b> </td>
			@endforeach
		</tr>
		<tr class="green lighten-4">
			<th>Cintalapa</th>
			<th>META</th>
			<th>0.200</th>
			<th>0.148</th>
			<th>0.333</th>
			<th>1.024</th>
			<th>0.971</th>
			<th>0.394</th>
			<th>0.335</th>
			<th>0.760</th>
			<th>0.450</th>
			<th>0.718</th>
			<th>0.272</th>
			<th>0.390</th>
			<th>6.00</th>
		</tr>

		<tr>
			<td></td>
			<td>REAL</td>
			@foreach($cintalapa as $c)
				<td>{{bcdiv($c->SAIDI,'1', 3)}} </td>
			@endforeach
		</tr>
		<tr class="red lighten-4" style="color:black">
			<td>Total Acumulado</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			@foreach($cin as $ci)
				<td style=color:"red"><b>{{bcdiv($ci->SAIDI,'1',3)}}</b> </td>
			@endforeach
		</tr>

		<tr class="green lighten-4">
			<th>Bochil</th>
			<th>META</th>
			<th>0.139</th>
			<th>0.151</th>
			<th>0.174</th>
			<th>1.743</th>
			<th>0.967</th>
			<th>0.333</th>
			<th>0.308</th>
			<th>0.553</th>
			<th>0.427</th>
			<th>0.690</th>
			<th>0.228</th>
			<th>0.365</th>
			<th>5.08</th>
		</tr>

		<tr>
			<td></td>
			<td>REAL</td>
			@foreach($bochil as $B)
				<td>{{bcdiv($B->SAIDI,'1',3)}} </td>
			@endforeach
		</tr>
		<tr class="red lighten-4" style="color:black">
			<td>Total Acumulado</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			@foreach($bo as $v)
				<td style=color:"red"><b>{{bcdiv($v->SAIDI,'1',3)}}</b> </td>
			@endforeach
		</tr>
		<tr class="green lighten-4">
			<th>Lineas</th>
			<th>META</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
		</tr>
		<tr>
			<td></td>
			<td>REAL</td>
			@foreach($lineas as $L)
				<td>{{bcdiv($L->SAIDI,'1',3)}} </td>
			@endforeach
		</tr>
		<tr class="red lighten-4" style="color:black">
			<td>Total Acumulado</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			@foreach($lin as $l)
				<td style=color:"red"><b>{{bcdiv($l->SAIDI,'1',3)}}</b> </td>
			@endforeach
		</tr>
		<tr class="green lighten-4">
			<th>Protecciones</th>
			<th>META</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
		</tr>
		<tr>
			<td></td>
			<td>REAL</td>
			<td>0.000</td>
			<td>0.000</td>
			<td>0.000</td>
			<td>0.000</td>
			<td>0.000</td>
		</tr>
		<tr class="red lighten-4" style="color:black">
			<td>Total Acumulado</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td style=color:"red">--</td>
		</tr>
		<tr class="green lighten-4">
			<th>Subestaciones</th>
			<th>META</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
		</tr>

		<tr>
			<td></td>
			<td>REAL</td>
			<td>0.000</td>
			<td>0.000</td>
			<td>0.000</td>
			<td>0.000</td>
			<td>0.000</td>

		</tr>
		<tr class="red lighten-4" style="color:black">
			<td>Total Acumulado</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td style=color:"red">--</td>
		</tr>
		<tr class="green lighten-4">
			<th>Control</th>
			<th>META</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
			<th>0.000</th>
		</tr>
		<tr>
			<td></td>
			<td>REAL</td>
			<td>0.000</td>
			<td>0.000</td>
			<td>0.000</td>
			<td>0.000</td>
			<td>0.000</td>

		</tr>
		<tr>
			<th></th>
			<th>META</th>
			<th>1.122</th>
			<th>1.824</th>
			<th>3.447</th>
			<th>10.009</th>
			<th>15.119</th>
			<th>17.584</th>
			<th>19.342</th>
			<th>24.446</th>
			<th>26.743</th>
			<th>30.421</th>
			<th>32.236</th>
			<th>34.697</th>
			<th>
				<tr class="red lighten-4" style="color:black">
					<td>Total Acumulado</td>
					<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
					<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td style=color:"red">--</td>
				</tr>
			</th>
		</tr>
		<tr>
			<td><center>Meta Mensual</center></td>
			<td>REAL</td>
			@foreach($lis as $lili)
				<td>{{bcdiv($lili->SAIDI,'1',3)}}</td>
			@endforeach
		</tr>
		<tr class="grey darken-1" style="color:white">
			<td>SAIDI ALCANZADO</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td style=color:"red">--</td>
			@foreach($uno as $um)
				<td><b>{{bcdiv($um->SAIDI,'1',3)}}</b></td>
			@endforeach
		</tr>
	</tbody>
</table>

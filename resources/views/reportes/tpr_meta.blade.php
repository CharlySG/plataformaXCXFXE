<center>
	<h4 style="color:green">TPR</h4>
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
       <th>Total</th>
     </tr>
      <tr>
       <th>FORANEA</th>
       <th>META</th>
       <th>13.000</th>
       <th>12.000</th>
       <th>18.000</th>
       <th>40.000</th>
       <th>20.000</th>
       <th>8.000</th>
       <th>9.000</th>
       <th>22.000</th>
       <th>5.000</th>
       <th>45.000</th>
       <th>14.000</th>
       <th>14.000</th>
       <th>220.00</th>
     </tr>
		</thead>
		<tbody>
	 <tr>
     <td></td>
     <td>REAL</td>
     @foreach($foranea as $f)
     <td>{{$f->TPR}}</td>
     @endforeach
   </tr>
   <tr class="red lighten-4" style="color:black">
			 <td>Total</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
    		 @foreach($Tforanea as $t)
    		 <td>{{$t->NI}}</td>
    		 @endforeach
    		 </tr>
    		  <tr>
       <th>URBANA</th>
       <th>META</th>
       <th>20.000</th>
       <th>15.000</th>
       <th>17.000</th>
       <th>45.000</th>
       <th>23.000</th>
       <th>12.000</th>
       <th>14.000</th>
       <th>24.000</th>
       <th>12.000</th>
       <th>47.000</th>
       <th>15.000</th>
       <th>18.000</th>
       <th>262.00</th>
     </tr>
      <tr>
     <td></td>
     <td>REAL</td>
     @foreach($urbana as $u)
     <td>{{$u->NI}}</td>
     @endforeach
   </tr>
   <tr class="red lighten-4" style="color:black">
			 <td>Total</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
    		 @foreach($Turbana as $t)
    		 <td>{{$t->NI}}</td>
    		 @endforeach
    		 </tr>
    		  <tr>
       <th>VILLAF</th>
       <th>META</th>
       <th>12.000</th>
       <th>13.000</th>
       <th>18.000</th>
       <th>40.000</th>
       <th>20.000</th>
       <th>8.000</th>
       <th>9.000</th>
       <th>22.000</th>
       <th>5.000</th>
       <th>39.000</th>
       <th>14.000</th>
       <th>14.000</th>
       <th>214.00</th>
     </tr>
    		  <tr>
     <td></td>
     <td>REAL</td>
     @foreach($villaflores as $v)
     <td>{{$v->NI}}</td>
     @endforeach
   </tr>
    <tr class="red lighten-4" style="color:black">
			 <td>Total</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
    		 @foreach($Tvillaflores as $t)
    		 <td>{{$t->NI}}</td>
    		 @endforeach
    		 </tr>
    		  <tr>
       <th>CINTALP</th>
       <th>META</th>
       <th>17.000</th>
       <th>8.000</th>
       <th>18.000</th>
       <th>40.000</th>
       <th>20.000</th>
       <th>8.000</th>
       <th>9.000</th>
       <th>22.000</th>
       <th>5.000</th>
       <th>38.000</th>
       <th>14.000</th>
       <th>14.000</th>
       <th>213.00</th>
     </tr>
     </tr>
     <tr>
     <td></td>
     <td>REAL</td>
     @foreach($cintalapa as $c)
     <td>{{$c->NI}}</td>
     @endforeach
   </tr>
    <tr class="red lighten-4" style="color:black">
			 <td>Total</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
    		 @foreach($Tcintalapa as $t)
    		 <td>{{$t->NI}}</td>
    		 @endforeach
    		 </tr>
    		 <tr>
       <th>BOCHIL</th>
       <th>META</th>
       <th>13.000</th>
       <th>12.000</th>
       <th>15.000</th>
       <th>32.000</th>
       <th>12.000</th>
       <th>14.000</th>
       <th>15.000</th>
       <th>14.000</th>
       <th>11.000</th>
       <th>19.000</th>
       <th>9.000</th>
       <th>7.000</th>
       <th>173.00</th>
     </tr>
      <tr>
     <td></td>
     <td>REAL</td>
     @foreach($bochil as $b)
     <td>{{$b->NI}}</td>
     @endforeach
   </tr>
   <tr class="red lighten-4" style="color:black">
			 <td>Total</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
    		 @foreach($Tbochil as $t)
    		 <td>{{$t->NI}}</td>
    		 @endforeach
    		 </tr>
    		 <tr>
       <th>LTS</th>
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
       <th>0.00</th>
     </tr>
     <tr>
     <td></td>
     <td>REAL</td>
     @foreach($lts as $lts)
     <td>{{$lts->NI}}</td>
     @endforeach
   </tr>
   <tr class="red lighten-4" style="color:black">
			 <td>Total</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
    		 @foreach($Tlts as $t)
    		 <td>{{$t->NI}}</td>
    		 @endforeach
    		 </tr>
    		 <tr>
    		 	<th>LINEAS</th>
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
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 </tr>
				 <tr class="red lighten-4" style="color:black">
		 			<td>Total</td>
		 			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
		 			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td style=color:"red">--</td>
		 		</tr>
    		 <tr>
    		 	<th>PROTECC</th>
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
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 </tr>
				 <tr class="red lighten-4" style="color:black">
		 			<td>Total</td>
		 			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
		 			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td style=color:"red">--</td>
		 		</tr>
    		 <tr>
    		 	<th>SUBEST</th>
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
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 </tr>
				 <tr class="red lighten-4" style="color:black">
		 			<td>Total</td>
		 			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
		 			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td style=color:"red">--</td>
		 		</tr>
    		 <tr>
    		 	<th>CONTROL</th>
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
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 	<td>0.000</td>
    		 </tr>
				 <tr class="red lighten-4" style="color:black">
		 			<td>Total</td>
		 			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
		 			<td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td style=color:"red">--</td>
		 		</tr>
    		 <tr>
    		 	<th>Meta Mens</th>
    		 	<th>META</th>
    		 	<th>75.000</th>
    		 	<th>60.000</th>
    		 	<th>86.000</th>
    		 	<th>197.000</th>
    		 	<th>95.000</th>
    		 	<th>50.000</th>
    		 	<th>56.000</th>
    		 	<th>104.000</th>
    		 	<th>38.000</th>
    		 	<th>188.000</th>
    		 	<th>66.000</th>
    		 	<th>67.000</th>
    		 	<th>1082.00</th>
    		 </tr>
    		 <tr>
     <td></td>
     <td>REAL</td>
     @foreach($mensual as $mes)
     <td>{{$mes->NI}}</td>
     @endforeach
   </tr>
    <tr class="grey darken-1" style="color:white">
			 <td>Total</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
       <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
    		 @foreach($totalregistros as $t)
    		 <td>{{$t->NI}}</td>
    		 @endforeach
    		 </tr>
		</tbody>
		</table>
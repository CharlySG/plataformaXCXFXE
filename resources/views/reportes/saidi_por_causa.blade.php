	<center>
		<h4 class="font-italic" style="color:green">SAIDI ZONA POR CAUSA </h4><br>
		<table class="table" style="width:15%">

			<thead>
				<tr>
					<th class="green lighten-4" style="text-align:center;" style="color:green">SAIDI ALCANZADO</th>
				</tr>
			</thead>

			@foreach($uno as $u)
				<tr class="red lighten-4" style="color:red">
					<td style="text-align:center;">{{bcdiv($u->SAIDI,'1',3)}} </td>

				</tr>
			@endforeach
		</table><br>

		<table id="sort-table" style="width:40%" class="highlight">
			<thead>
				<tr class="green darken-4" style="color:white">
					<th style="text-align:center;">Causa</th>
					<th style="text-align:center;">NI</th>
					<th style="text-align:center;">SAIDI</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Datos as $D)
					<tr>
						<td style="text-align:center;">{{$D->Causa}}</td>
						<td style="text-align:center;">{{$D->NI}}</td>
						<td style="text-align:center;">{{bcdiv($D->Total,'1',3)}} </td>
					</tr>
				@endforeach
				@foreach($uno as $u)
					<tr class="red lighten-4" style="color:red">
						<td style="text-align:center;"><strong>Total</strong></td>
						<td style="text-align:center;">{{$u->NI}} </td>
						<td style="text-align:center;">{{bcdiv($u->SAIDI,'1',3)}} </td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</center>

	<script type="text/javascript" src="materialize.js"></script>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery.tablesorter.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<script>

	$(function()
	{
		$("sort-table").tablesorter({sortList: [[2,1],[1,0]]});
	}
	);
	</script>

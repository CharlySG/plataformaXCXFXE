<<<<<<< HEAD

=======
>>>>>>> 93e35ca8955cf31d8805b0f4fc17f266be5915d5
<center>
    <h4 class="font-italic" style="color:green">SAIDI ZONA POR CAUSA </h4>
    <br>
    <table class="table" style="width:15%">

        <thead>
            <tr>
                <th class="green lighten-4" style="text-align:center;" style="color:green">SAIDI ALCANZADO</th>
            </tr>
        </thead>

        @foreach($uno as $u)
        <tr class="red lighten-4" style="color:red; font-size:50px;">
            <td style="text-align:center;">{{bcdiv($u->SAIDI,'1',3)}} </td>
        </tr>
        @endforeach
    </table>
    <br>
    <table id="sort-table" style="width:40%" class="highlight">
        <thead>
            <tr class="green darken-4" style="color:white">
                <th style="text-align:center;">Causa</th>
                <th class="" style="text-align:center;">
                    <a id="OrderByBtnNI" class="waves-effect" style="color:white;"><i id="orderIconArrow" class="material-icons right">keyboard_arrow_up</i>NI</a>
                </th>
                <th style="text-align:center;">SAIDI</th>
            </tr>
        </thead>
        <tbody id="tableRenderSaidi">
            @include('tables.saidi_por_causa_table')
        </tbody>
    </table>
</center>
<script src="{{ asset('js/saidi_por_causa.js') }}"></script>

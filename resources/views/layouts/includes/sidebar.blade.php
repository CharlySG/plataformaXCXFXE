<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="https://images.unsplash.com/photo-1509390726584-faaa21c8ac95?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ebad4a7a9785e16a2bf213b0676bd039&auto=format&fit=crop&w=300&q=80">
      </div>
      <a href="#user"><i class="material-icons">user</i></a>
      <a href="#name"><span class="white-text name">{{Auth::user()->name}}</span></a>
      <a href="#email"><span class="white-text email">{{Auth::user()->email}}</span></a>
    </div></li>
    {{-- <li><a href="#!">First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li> --}}
    <li><div class="divider"></div></li>
    <li><a href="#!" onclick="getView('reportes/saidi_por_causa');">SAIDI POR CAUSA</a></li>
    <li><a href="#!" onclick="getView('reportes/confiabilidad_mensual')">CONFIABILIDAD MENSUAL</a></li>
    <li><a href="#!">SAIDI CIRCUITO VS MANTTO</a></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li class="bold">
            <a class="collapsible-header waves-effect waves-teal" tabindex="0"><i class="material-icons">assessment</i>RESULTADO META VS REAL</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="#!" onclick="getView('reportes/saidi_meta');">SAIDI</a></li>
                  <li><a href="#!" onclick="getView('reportes/saifi_meta');">SAIFI</a></li>
                  <li><a href="#!" onclick="getView('reportes/caidi_meta');">CAIDI</a></li>
                  <li><a href="#!" onclick="getView('reportes/tpr_meta');">TPR</a></li>
                  <li><a href="#!" onclick="getView('reportes/ni_meta');">NI</a></li>
                  <li><a href="#!" onclick="getView('reportes/upa_meta');">UPA</a></li>
                </ul>
              </div>
            </li>
            <li class="bold">
              <a class="collapsible-header waves-effect waves-teal" tabindex="0"><i class="material-icons">assessment</i>RAMALES POR CAUSA</a>
                <div class="collapsible-body" style="">
                  <ul>
                    <li><a href="#!" onclick="getView('reportes/lmx');">LMX</a></li>
                    <li><a href="#!" onclick="getView('reportes/gia');">GIA</a></li>
                    <li><a href="#!" onclick="getView('reportes/tgd');">TGD</a></li>
                    <li><a href="#!" onclick="getView('reportes/juy');">JUY</a></li>
                    <li><a href="#!" onclick="getView('reportes/vfd');">VFD</a></li>
                    <li><a href="#!" onclick="getView('reportes/rdb');">RDB</a></li>
                    <li><a href="#!" onclick="getView('reportes/tgu');">TGU</a></li>
                    <li><a href="#!" onclick="getView('reportes/txn');">TXN</a></li>
                    <li><a href="#!" onclick="getView('reportes/txs');">TXS</a></li>
                    <li><a href="#!" onclick="getView('reportes/ocz');">OCZ</a></li>
                    <li><a href="#!" onclick="getView('reportes/ipd');">IPD</a></li>
                    <li><a href="#!" onclick="getView('reportes/lgz');">LGZ</a></li>
                    <li><a href="#!" onclick="getView('reportes/cit');">CIT</a></li>
                    <li><a href="#!" onclick="getView('reportes/maa');">MAA</a></li>
                    <li><a href="#!" onclick="getView('reportes/cop');">COP</a></li>
                    <li><a href="#!" onclick="getView('reportes/mpe');">MPE</a></li>
                    <li><a href="#!" onclick="getView('reportes/ped');">PED</a></li>
                    <li><a href="#!" onclick="getView('reportes/smj');">SMJ</a></li>
                    <li><a href="#!" onclick="getView('reportes/aaa');">AAA</a></li>
                    <li><a href="#!" onclick="getView('reportes/soy');">SOY</a></li>
                    <li><a href="#!" onclick="getView('reportes/par');">PAR</a></li>
                    <li><a href="#!" onclick="getView('reportes/bbn');">BBN</a></li>
                  </ul>
                </div>
              </li>
        </ul>
      </li>
  </ul>

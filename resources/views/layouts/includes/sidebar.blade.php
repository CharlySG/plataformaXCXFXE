<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="https://images.unsplash.com/photo-1509390726584-faaa21c8ac95?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ebad4a7a9785e16a2bf213b0676bd039&auto=format&fit=crop&w=300&q=80">
      </div>
      <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
      <a href="#name"><span class="white-text name">{{Auth::user()->name}}</span></a>
      <a href="#email"><span class="white-text email">{{Auth::user()->email}}</span></a>
    </div></li>
    <li><a href="#!">First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li class="bold"><a class="collapsible-header waves-effect waves-teal" tabindex="0"><i class="material-icons">assessment</i>JavaScript</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="auto-init.html">Auto Init</a></li>
                  <li><a href="carousel.html">Carousel</a></li>
                  <li class="active"><a href="collapsible.html">Collapsible</a></li>
                  <li><a href="dropdown.html">Dropdown</a></li>
                  <li><a href="feature-discovery.html">FeatureDiscovery</a></li>
                </ul>
              </div>
            </li>
        </ul>
      </li>
  </ul>
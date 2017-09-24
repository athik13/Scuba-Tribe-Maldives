    <!-- header page-->
    <header>
      <!-- site top panel-->
      <div class="site-top-panel">
        <div class="container p-relative">
          <div class="row">
            <div class="col-md-6 col-sm-7">
              <!-- lang select wrapper-->
              <div class="top-left-wrap font-3">
                <div class="mail-top"><a href="mailto:info@scubatribemaldives.com"> <i class="flaticon-suntour-email"></i>info@scubatribemaldives.com</a></div><span>/</span>
                <div class="tel-top"><a href="tel:7465333"> <i class="flaticon-suntour-phone"></i>(960)-7465333</a></div>
              </div>
              <!-- ! lang select wrapper-->
            </div>
            <div class="col-md-6 col-sm-5 text-right">
              <div class="top-right-wrap">
                <div class="top-login"><a href="#">My Account</a></div>
                <div class="curr-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en">Currency<i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">USD</a></li>
                          <li><a href="#">EUR</a></li>
                          <li> <a href="#">GBP</a></li>
                          <li> <a href="#">AUD</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="lang-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en">Language <i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">English</a></li>
                          <li> <a href="#">Deutsch</a></li>
                          <li> <a href="#">Espanol</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ! site top panel-->
      <!-- Navigation panel-->
      <nav class="main-nav js-stick">
        <div class="full-wrapper relative clearfix container">
          <!-- Logo ( * your text or image into link tag *)-->
          <div class="nav-logo-wrap local-scroll"><a href="{{ url('/') }}" class="logo"><img src="/img/logo-scuba.png" data-at2x="/img/logo-scuba.png" alt width="198px" height="50px"></a></div>
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav">
            <ul class="clearlist">
              <!-- Item With Sub-->
              <li><a href="{{ url('/') }}">Home</a></li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li class="active"><a href="{{ url('/liveaboards') }}">Liveaboards</a></li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li><a href="{{ url('/catameran') }}">Catameran</a></li>
              <!-- End Item With Sub-->
              <!-- span /-->
              <!-- Item With Sub-->
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li><a href="{{ url('/dive-spots') }}">Dive Spots</a></li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item-->
              <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
              <!-- End Item-->
              <!-- Search-->
              <li class="search"><a href="#" class="mn-has-sub">Search</a>
                <ul class="search-sub">
                  <li>
                    <div class="container">
                      <div class="mn-wrap">
                        <form method="post" class="form">
                          <div class="search-wrap">
                            <input type="text" placeholder="Where will you go next?" class="form-control search-field"><i class="flaticon-suntour-search search-icon"></i>
                          </div>
                        </form>
                      </div>
                      <div class="close-button"><span>Search</span></div>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- End Search-->
            </ul>
          </div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
    </header>
    <!-- ! header page-->
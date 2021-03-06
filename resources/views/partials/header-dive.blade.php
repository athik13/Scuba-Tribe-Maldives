    <!-- header page-->
    <header>
      <!-- site top panel-->
      <div class="site-top-panel">
        <div class="container p-relative">
          <div class="row">
            <div class="col-md-7 col-sm-8">
              <!-- lang select wrapper-->
              <div class="top-left-wrap font-3">
                <div class="mail-top"><a href="mailto:info@scubatribemaldives.com"> <i class="fa fa-envelope"></i>info@scubatribemaldives.com</a></div><span>/</span>
                <div class="tel-top"><a href="tel:7465333"> <i class="fa fa-phone"></i>(960)-7465333</a></div>
              </div>
              <!-- ! lang select wrapper-->
            </div>
            <div class="col-md-5 col-sm-4 text-right">
              <div class="top-right-wrap">
                <!-- <div class="top-login"><a href="#">My Account</a></div> -->
                <!-- <div class="lang-wrap dropdown">
                  <div>
                    <ul>
                      <li><a href="#" class="lang-sel icl-en">Language <i class="fa fa-angle-down"></i></a>
                        <ul>
                          <li><a href="#">English</a></li>
                          <li> <a href="#">Russian</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div> -->
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
              <!-- Home -->
              <li><a href="{{ url('/') }}" class="active">Home</a>
              </li>
              <li class="slash">/</li>
              <!-- End Home -->
              
              <!-- Liveaboard -->
              <li><a href="{{ url('/liveaboard') }}">Liveaboards</a>
              </li>
              <li class="slash">/</li>
              <!-- End Liveaboard -->

              <!-- Catamaran -->
              <li><a href="{{ url('/catamaran') }}">Catamarans</a>
              </li>
              <li class="slash">/</li>
              <!-- End Catamaran -->

              <!-- Local Island -->
              <li><a href="{{ url('/local-island') }}">Local Islands</a>
              </li>
              <li class="slash">/</li>
              <!-- End Local Island -->

              <!-- Caontact-Us -->
              <li><a href="pag{{ url('/contact-us') }}">Contact Us</a></li>
              <!-- End Item-->
              <!-- Search-->
              <li class="search"><a href="#" class="mn-has-sub">Search</a>
                <ul class="search-sub">
                  <li>
                    <div class="container">
                      <div class="mn-wrap">
                        @include('partials.search')
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
      <!-- breadcrumbs start-->
      <section style="background-image:url('{{ $liveaboard->first_image->photo_url }}');" class="breadcrumbs style-2 gray-90">
        <div class="container">
          <div class="text-left breadcrumbs-item"><a href="{{ url('/') }}">home</a><i>/</i><a href="{{ url('liveaboard') }}">Liveaboard</a><i>/</i><a href="#" class="last">{{ $liveaboard->name }}</a>
            <h2>
              {{ $liveaboard->name }}
              <span class="stars stars-{{ $liveaboard->star }}">
                <span>{{ $liveaboard->star }} stars</span>
              </span>
            </h2>
          </div>
          <div class="breadright"><a href="{{ url('inquiry') }}/{{ $diving_spot->id }}/{{ $diving_spot->name }}/local-island/diving" class="cws-button small alt">Send Inquiry</a>
            <p>Best Price Guarantee</p>
          </div>
        </div>
      </section>
      <!-- ! breadcrumbs end-->
    </header>
    <!-- ! header page-->
  @php
  $menuItems = \App\Models\Category::all();
  @endphp
  <header class="header header-bg">
      <div class="header-background-overlay"></div>
      <!-- TopBar Start -->
      <section class="topbar d-none d-lg-block">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 col-lg-12">
                      <div class="d-flex flex-column flex-md-row gap-5">
                          <div>
                              <span class="topbar-icon"><i class="fas fa-mobile-alt"></i></span>
                              <span class="topbar-content">+1234567890</span>
                          </div>
                          <div>
                              <span class="topbar-icon"><i class="fas fa-envelope"></i></span>
                              <span class="topbar-content">contact@domain.com</span>
                          </div>
                          <div>
                              <span class="topbar-icon"><i class="far fa-clock"></i></span>
                              <span class="topbar-content">10:00 Am &dash; 06:00 Pm</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- TopBar End -->

      <!-- NavBar Start -->
      <nav class="navbar navbar-expand-lg bg-transparent">
          <div class="container">
              <a class="navbar-brand" href="{{route('/')}}" style="width: 280px;">
                  <div class="d-flex align-items-center gap-4">
                      <!-- <span class="site-icon"><i class="fas fa-truck-moving"></i></span> -->
                      <span class="site-icon"><img src="/images/logo.png" /></span>
                      <!-- <span class="site-name">my site</span> -->
                  </div>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center main-a">
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{route('/')}}">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('about')}}">About Us</a>
                      </li>
                      <!-- <li class="nav-item pdropdown">
                          <a class="nav-link dropbtn">Products Range
                              <i class="fa fa-caret-down"></i>
                          </a>
                          <div class="dropdown-content">
                              @foreach($menuItems as $cat)
                              @php
                              $sub = \App\Models\SubCategory::where('category_id',$cat->id)->get();
                              @endphp
                              <a class="dropdown-item" href="#">{{$cat->name}}</a>
                              @endforeach
                          </div>
                      </li> -->
                      <li class="nav-item pdropdown">
                          <a class="nav-link dropbtn" href="#">
                              Products Range
                              <i class="fa fa-caret-down"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-content">
                              @foreach($menuItems as $cat)
                              <li>
                                  <a class="dropdown-item" href="#">
                                      {{$cat->name}}
                                  </a>
                                  @if($cat->subcategory->count() > 0)
                                  <ul class="dropdown-menu dropdown-submenu dropdown-content">
                                      @foreach($cat->subcategory as $s)
                                      <li>
                                          <a class="dropdown-item" href="{{route('product',$s->id)}}">{{$s->name}}</a>
                                      </li>
                                      @endforeach
                                  </ul>
                                  @endif
                              </li>
                              @endforeach
                          </ul>
                      </li>
                      <li class=" nav-item">
                          <a class="nav-link" href="{{route('export')}}">Export Market</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('contact')}}">Contact</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link btn btn-quote" href="{{route('enquiry')}}">Enquiry Form</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- NavBar End -->
      @if(Request::is('/'))
      <!-- Hero Start -->
      <section class="hero">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-lg-8">
                      <h1 class="hero-title">world most reliable<br>exprt delivery<br>service</h1>
                      <div class="d-flex flex-column flex-md-row gap-3">
                          <a href="#" class="btn btn-learn">learn more</a>
                          <a href="#" class="btn btn-contact">contact us</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Hero End -->
      @else
      <!-- Hero Start -->
      <section class="breadcrumb-about">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-lg-8 mx-auto text-center">
                      <h1 class="breadcrumb-title">&dash; {{$title}} &dash;</h1>
                      <div class="d-flex align-items-center justify-content-center gap-3 z-index-3">
                          <a href="{{route('/')}}" class="breadcrumb-link">home</a>
                          <b class="text-primary">&nbsp;&nbsp;»&nbsp;&nbsp;</b>
                          <p class="text-primary text-capitalize">{{$title}}</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Hero End -->
      @endif
  </header>
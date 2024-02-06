
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-danger m-0"><img src="{{asset('/')}}/website/img/mountlover.jpg" alt="Logo" height="40px" width="40px">Mount Lover</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link ">About</a>
                    <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                    <a href="{{route('package')}}" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('destination')}}" class="dropdown-item">Destination</a>
                            <a href="{{route('booking')}}" class="dropdown-item">Booking</a>
                            <a href="{{route('team')}}" class="dropdown-item">Admin</a>
                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
                <a
                  href="
                  @if(Session::get('customer_id'))
                  {{route('cus-dashboard')}}
                  @else
                  {{route('customer-login')}}
                  @endif
                  " class="btn btn-danger rounded-pill py-2 px-4">
                  @if(Session::get('customer_id'))
                  Dashboard 
                  @else
                  Log In
                  @endif
                </a>
            </div>
        </nav>
    </div>
    <div class="container-fluid bg-danger py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Enjoy Your Vacation With Us</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Adventures are the best way to learn.</p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Bandharban">
                        <button type="button" class="btn btn-danger rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

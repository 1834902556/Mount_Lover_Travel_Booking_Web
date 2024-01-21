    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Rupganj, Narayanganj, Bangladesh</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+088 01991079652</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>mountlover10@.com</small>
                    @if(Session::get('customer_id'))
                        {{-- <a href="{{route('cus-login')}}"><small class="text-light"><i class="me-5"></i>Dashboard</small></a> --}}
                        <a href=""><small class="text-light"><i class="ms-5">Hello {{Session::get('customer_name')}}</i></small></a>
                        <a href="{{route('cus-logout')}}"><small class="text-light"><i class="me-4"></i>Logout</small></a>
                    @else
                    <a href="{{route('cus-login')}}"><small class="text-light"><i class="me-5"></i>Login</small></a>
                    <a href="{{route('cus-register')}}"><small class="text-light"><i class="me-4"></i>Register</small></a>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-danger px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($tours as $tour)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="" src="{{asset($tour->image)}}" height="300px" width="400px" alt="">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-danger me-2"></i>{{$tour->title}}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-danger me-2"></i>{{$tour->duration}}</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-danger me-2"></i>{{$tour->person}}</small>
                        </div>
                        <div class="text-center p-4">
                            <h3 class="mb-0">{{$tour->total_cost}} tk/person</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-danger"></small>
                                <small class="fa fa-star text-danger"></small>
                                <small class="fa fa-star text-danger"></small>
                                <small class="fa fa-star text-danger"></small>
                                <small class="fa fa-star text-danger"></small>
                            </div>
                            <p>{{$tour->sort_description}}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{route('show-detail',['id'=>$tour->id])}}" class="btn btn-sm btn-dangerpx-3" style="border-radius: 30px 0 0 30px;">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Package End -->
    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-danger px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('/')}}/website/img/destination-1.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div>
                                <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Sylhet</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('/')}}/website/img/destination-2.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25% OFF</div>
                                <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Rangamati</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{asset('/')}}/website/img/destination-3.jpg" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35% OFF</div>
                                <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Cox's Bazar</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('/')}}/website/img/destination-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div>
                        <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Bandharban</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination Start -->
    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-danger px-3">Process</h6>
                <h1 class="mb-5">3 Easy Steps</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-danger pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-danger rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-danger mb-1">
                        <hr class="w-50 mx-auto bg-danger mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-danger pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-danger rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Pay Online</h5>
                        <hr class="w-25 mx-auto bg-danger mb-1">
                        <hr class="w-50 mx-auto bg-danger mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-danger pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-danger rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Fly Today</h5>
                        <hr class="w-25 mx-auto bg-danger mb-1">
                        <hr class="w-50 mx-auto bg-danger mt-0">
                        <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->

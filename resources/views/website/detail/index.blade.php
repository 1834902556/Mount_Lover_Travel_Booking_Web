@extends('website.master')
@section('title')
Tour-details
@endsection
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Tour Details</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="{{route('home')}}"><i class="lni lni-home"></i>
                            Home</a></li>
                    <li><a href="{{route('home')}}">Packages</a></li>
                    <li>Tour Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="item-details section">
    <div class="container">
        <div class="top-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="xzoom-container">
                        <img class="xzoom" id="xzoom-default" src="{{asset($tour->image)}}" xoriginal="{{asset($tour->image)}}" height="300px" width="300px" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="product-info">
                        <h2 class="title">{{$tour->name}}</h2>
                        <p class="category">
                            <i class="lni lni-tag"></i>Tour Place:
                            <a href="javascript:void(0)">
                                {{$tour->place->name}}
                            </a>
                        </p>
                        <p class="category">
                            <i class="lni lni-tag"></i>Tour Spot:
                            <a href="javascript:void(0)">
                                {{$tour->spot->name}}
                            </a>
                        </p>
                        <h3 class="price"> {{$tour->total_cost}}tk</h3>
                        <p class="info-text">
                            {{$tour->sort_description}}
                        </p>
                        <form action="{{route('add.cart',['id'=>$tour->id])}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class=" col-12">
                                    <div class="form-group quantity">
                                        <input type="number" name="total_person" value="1" min="1" class="form-control" placeholder="Enter Total Person">
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-content">
                                <div class="row align-items-end">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="button cart-button">
                                            <button type="submit" class="btn"
                                                style="width: 100%;">
                                                Confirm
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="wish-button">
                                            Total Person
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-details-info">
            <div class="single-block">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="info-body custom-responsive-margin">
                            <h4>Details</h4>
                             <p>{!! $tour->long_description !!}</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="single-block give-review">
                        <h4>4.5 (Overall)</h4>
                        <ul>
                            <li>
                                <span>5 stars - 38</span>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                            </li>
                            <li>
                                <span>4 stars - 10</span>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star"></i>
                            </li>
                            <li>
                                <span>3 stars - 3</span>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                            </li>
                            <li>
                                <span>2 stars - 1</span>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                            </li>
                            <li>
                                <span>1 star - 0</span>
                                <i class="lni lni-star-filled"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                                <i class="lni lni-star"></i>
                            </li>
                        </ul>

                        <button type="button" class="btn review-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Leave a Review
                        </button>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="single-block">
                        <div class="reviews">
                            <h4 class="title">Latest Reviews</h4>

                            <div class="single-review">
                                <img
                                    src="assets/images/blog/comment1.jpg"
                                    alt="#">
                                <div class="review-info">
                                    <h4>Awesome quality for the price
                                        <span>Jacob Hammond
                                        </span>
                                    </h4>
                                    <ul class="stars">
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed
                                        do eiusmod
                                        tempor...</p>
                                </div>
                            </div>


                            <div class="single-review">
                                <img
                                    src="assets/images/blog/comment2.jpg"
                                    alt="#">
                                <div class="review-info">
                                    <h4>My husband love his new...
                                        <span>Alex Jaza
                                        </span>
                                    </h4>
                                    <ul class="stars">
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni lni-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed
                                        do eiusmod
                                        tempor...</p>
                                </div>
                            </div>


                            <div class="single-review">
                                <img
                                    src="assets/images/blog/comment3.jpg"
                                    alt="#">
                                <div class="review-info">
                                    <h4>I love the built quality...
                                        <span>Jacob Hammond
                                        </span>
                                    </h4>
                                    <ul class="stars">
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                        <li><i class="lni
                                                lni-star-filled"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed
                                        do eiusmod
                                        tempor...</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade review-modal" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Leave a
                    Review</h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-name">Your Name</label>
                            <input class="form-control" type="text"
                                id="review-name" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-email">Your Email</label>
                            <input class="form-control" type="email"
                                id="review-email" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-subject">Subject</label>
                            <input class="form-control" type="text"
                                id="review-subject" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="review-rating">Rating</label>
                            <select class="form-control"
                                id="review-rating">
                                <option>5 Stars</option>
                                <option>4 Stars</option>
                                <option>3 Stars</option>
                                <option>2 Stars</option>
                                <option>1 Star</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="review-message">Review</label>
                    <textarea class="form-control" id="review-message"
                        rows="8" required></textarea>
                </div>
            </div>
            <div class="modal-footer button">
                <button type="button" class="btn">Submit Review</button>
            </div>
        </div>
    </div>
</div>
@endsection

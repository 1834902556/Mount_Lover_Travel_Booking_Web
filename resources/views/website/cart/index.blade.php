@extends('website.master')
@section('title')
Confirm
@endsection
@section('content')
<div class="breadcrumbs">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="breadcrumbs-content">
            <h1 class="page-title">Confirm Tour</h1>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <ul class="breadcrumb-nav">
            <li><a href="{{route('home')}}"><i class="lni lni-home"></i> Home</a></li>
            <li><a href="{{route('home')}}">Packages</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <p class="text-center text-success pt-2"> {{ session('msg') }}</p>
  <div class="shopping-cart section">
    <div class="container">
      <div class="cart-list-head">
        <div class="cart-list-title">
          <div class="row">
            <div class="col-lg-4 col-md-3 col-12">
              <p>Tour Name</p>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
              <p> Total Traveller </p>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
              <p>Per Person Cost</p>
            </div>
            <div class="col-lg-2 col-md-2 col-12">
              <p>Total Cost</p>
            {{-- </div>
            <div class="col-lg-1 col-md-2 col-12">
              <p>Remove</p>
            </div>
          </div> --}}
        </div>
        @php($sum=0)
        <div class="cart-single-list">
            <div class="row align-items-center">
              <div class="col-lg-1 col-md-1 col-12">
                <a href="product-details.html"><img
                    src="{{asset($image)}}" alt="#"></a>
              </div>
              <div class="col-lg-3 col-md-3 col-12">
                <h5 class="product-name"><a href="">{{$tour_name}}</a></h5>
                <p class="product-des">
                  {{-- <span><em>Category:</em> {{$cart_product->category->name}}</span> --}}
                  {{-- <span><em>Brand:</em> {{$cart_product->brand->name}}</span>  --}}
                </p>
              </div>
              <div class="col-lg-2 col-md-2 col-12">
                {{-- <form action="{{route('update.cart_product',['id' => $cart_product->__raw_id])}}" method="POST"> --}}
                    {{-- <form action="" method="POST">
                    @csrf
                  <div class="input-group">
                    <input class="form-control" value="{{$total_person}}" name="total_person" min="1" required>
                    <input type="submit" class="btn btn-success" value="Update">
                  </div>
                </form> --}}
                <p>{{$total_person}} Person</p>
              </div>
              <div class="col-lg-2 col-md-2 col-12">
                <p>{{$total_cost}}tk</p>
              </div>
              <div class="col-lg-2 col-md-2 col-12">
                <p>{{$total_person * $total_cost}}tk</p>
              </div>
              {{-- <div class="col-lg-1 col-md-2 col-12">
                <a class="remove-item" onclick=" return confirm('Are you sure to remove')" href="{{route('remove.cart_product',['id'=>$cart_product->__raw_id])}}"><i class="lni
                    lni-close"></i></a>
                    <a class="remove-item" onclick=" return confirm('Are you sure to remove')" href=""><i class="lni
                        lni-close"></i></a>
              </div> --}}
            </div>
          </div>
          @php($sum = $total_person * $total_cost)
      </div>
      <div class="row">
        <div class="col-12">
          <div class="total-amount">
            <div class="row">
              <div class="col-lg-8 col-md-6 col-12">
                <div class="left">
                  <div class="coupon">
                    <form action="#" target="_blank">
                      <input name="Coupon" placeholder="Enter Your Coupon">
                      <div class="button">
                        <button class="btn">Apply Coupon</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="right">
                  <ul>
                    <li>Cart Subtotal = <span>{{$sum}}tk</span></li>
                    <li>Travel Tax(5%) = <span>{{$tax = ($sum*5)/100}}tk</span></li>
                    <li>Extra Charge = <span>{{$shipping=500}}tk</span></li>
                    <li>Total Payable = <span>{{$sum+$tax+$shipping}}tk</span></li>
                  </ul>
                  <div class="button">
                    <a href="
                    @if(Session::get('customer_id'))
                       {{route('book-now',['id'=>$id])}}
                    @else
                    {{route('customer-login')}}
                    @endif
                    " class="btn btn-sm btn-dangerpx-3" style="border-radius: 0 30px 30px 0;">Book Now
                   </a>
                    <a href="" class="btn btn-alt">Continue
                      </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

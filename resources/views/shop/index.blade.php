@extends('layouts.master')
@section('title')
	Laravel Shopping Cart
@endsection
 
@section('content')
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-info animated wow zoomIn" data-wow-delay=".5s">
				<h3>Free Online Shopping</h3>
				<h4>Up to <span>50% <i>Off/-</i></span></h4>
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>T-Shirts + Formal Pants + Jewellery + Cosmetics</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Toys + Furniture + Lighting + Watches</p>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner-info1">
									<p>Tops + Books & Media + Sports</p>
								</div>
							</div>
						</article>
					</div>
				</div>
               
			</div>
		</div>
	</div>
<!-- //banner -->
@if(Session::has('success'))

<div class="row">
  <div class="col-sm-6 col-md-4 col-md-offset-
  4 col-sm-offset-3">
    
<div id="charge-message" class="alert alert-success">
  {{Session::get('success')}}
    </div>
  </div>
</div>
@endif
@foreach($products->chunk(3) as $productChunk)

<div class="row" style="margin-top: 10px">
@foreach($productChunk as $product)
<div class="col-sm-6 col-md-4">
	<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{$product->imagePath}}" alt="python" class="img-responsive" style="max-height: 250px;">
  <div class="card-body">
    <h4 class="card-title">{{$product->title}}</h4>
    <p class="card-text" class="color:#fffff">{{$product->description}}</p>
    <div class="clearfix">
    	<div class="pull-left" style="font-size: 16px;font-weight: bold;">${{$product->price}}</div>
    <a href="{{route('product.addToCart',['id'=>$product->id])}}" name="cart" class="btn btn-success pull-right">Add to Cart</a>
</div>
  </div>
</div>
</div>
@endforeach
	</div>
  @endforeach
@endsection

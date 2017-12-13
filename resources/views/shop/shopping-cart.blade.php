@extends('layouts.master')
@section('title')
	Laravel Shopping Cart
@endsection
@section('content')

@if(Session::has('cart'))
<div class="row">
	
<div class="col-sm-6 col-md-offset-3 col-sm-offset-3">
	<ul class="list-group">
		@foreach($products as $product)
		<li class="list-group-item">
			
			<strong>{{$product['item']['title']}}</strong>
			<span class=" badge btn btn-primary" >${{$product['price']}}</span>
			<div class="btn-group">
				<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action<span class="caret"></span></button>
				<ul class="dropdown-menu">
				<li><a href="#">Reduce by 1</a></li>
				<li><a href="#">Reduce all</a></li>
			</ul>

			</div>
			<span class="badge pull-right btn btn-success btn-xs">{{$product['qty']}}</span>
		</li>
		@endforeach
	</ul>
</div>
</div>
<div class="row">
	
<div class="col-sm-6 col-md-offset-3 col-sm-offset-3">
	<strong>Total: ${{$totalPrice}}</strong>
	</div>
</div>
<hr>
<div class="row">
	
<div class="col-sm-6 col-md-offset-3 col-sm-offset-3">
	<a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
</div>
</div>
@else
	<div class="row">
	
<div class="col-sm-6 col-md-offset-3 col-sm-offset-3">
	<h1>No Items in cart!</h1>
</div>
</div>


@endif

@endsection
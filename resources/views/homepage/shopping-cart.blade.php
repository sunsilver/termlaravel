@extends('layouts.master')

@section('content')
	@if(Session::has('cart'))
		<div class="row" style="margin-left: 600px">
			<div class="col-lg-4 col-md-6 mb-4">
				<ul class="list-group">
					@foreach($products as $product)
						<li class="list-group-item">
							<span class="badge">{{ $product['qty'] }}</span>
							<strong>{{$product['item']['title'] }}</strong>
							<span class="lable label-success">{{ $product['price'] }}</span>
							<div class="btm-group">
								<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
								<ul class="dropdown-menu">
										<li><a href="#">Reduce by 1</a></li>
										<li><a href="#">Reduce All</a></li>
								</ul>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row" style="margin-left: 600px">
			<div class="col-lg-4 col-md-6 mb-4">
				<strong>Total: {{ $totalPrice }}</strong>
			</div>
		</div>
		<div class="row" style="margin-left: 600px">
			<div class="col-lg-4 col-md-6 mb-4">
				<a href="{{ route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
			</div>
		</div>
	@else
	<div class="row">
			<div class="col-lg-4 col-md-6 mb-4">
				<h2>No Items in Cart!</h2>
			</div>
		</div>

	@endif
@endsection
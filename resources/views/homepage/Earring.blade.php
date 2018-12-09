@extends('layouts.master')

@section('content')

<!-- Page Content -->
<div class="container">

	<div class="row">

		<div class="col-lg-3">
			<h1 class="my-4">Shop Name</h1>
			<div class="list-group">
				<a href="Ring" class="list-group-item">Ring</a>
				<a href="Earring" class="list-group-item">Earring</a>
				<a href="Necklace" class="list-group-item">Necklace</a>
			</div>
		</div>
		<!-- /.col-lg-3 -->

		<div class="col-lg-9">
			<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
			@foreach($products->chunk(3) as $productChunk)
				<div class="row">
				@foreach($productChunk as $product)
					<div class="col-lg-4 col-md-6 mb-4">
						<div class="card h-100">
							<a href="#"><img class="card-img-top" src="{{ $product->imagepath }}" height="200" alt=""></a>
							<div class="card-body">
								<h4 class="card-title">
									<a href="#">{{ $product->title }}</a>
									<a href="{{ route('product.addToCart', ['id'=>$product->id])}}" button class="btn btn-default" type="submit">add to cart</a>
								</h4>
								<div class="price">{{ $product->price }}</div>
								<p class="card-text">{{ $product->description }}</p>
							</div>
							<div class="card-footer">
								<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
							</div>
						</div>
					</div>
					@endforeach

				</div>
				@endforeach

			</div>
			<!-- /.row -->

		</div>
		<!-- /.col-lg-9 -->

	</div>
	<!-- /.row -->

</div>
<!-- /.container -->


@endsection
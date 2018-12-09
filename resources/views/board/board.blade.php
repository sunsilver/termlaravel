@extends('app')

@section('content')

	<div class="container" style="margin-top: 80px">

		<div class="row">

			<div class="col-lg-3">

				<h1 class="my-4">Coummunity</h1>
				<div class="list-group">
					<a href="{{url('board/board/board')}}" class="list-group-item">Notice</a>
					<a href="{{url('board/board/question')}}" class="list-group-item">Q&A</a>
					<a href="{{url('board/board/review')}}" class="list-group-item">Review</a>
				</div>

			</div>




			<div class="col-lg-9" style=" margin-top: 40px; width: 100%">
				<div id="carouselExampleIndicators" class="row" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<table class="table table-hover">
								<tr>
									<th>번호</th>
									<th>제목</th>
									<th>작성자</th>
									<th>작성일시</th>
									<th>조회수</th>
								</tr>
							</div>
						</div>
					</div>
				</div>

	@foreach($boards as $msg)
			<tr>
				<td>{{ $msg["num"] }}</td>			    
				<td><a href="{{url('board/board/view')}}/{{$msg['num']}}"> {{ $msg["title"] }} </a> </td>
				<td>{{ $msg["writer"] }} </td>
				<td>{{ $msg["regtime"] }} </td>
				<td>{{ $msg["hits"] }} </td>
			</tr>
	@endforeach


	</table>	

  
	<div class="float-right" style="margin-right:50px">
		<!-- @if(auth::login()['sunsilver'])
		<button class="btn btn-primary" onclick="location.href='{{url('board/write_form/'.$board)}}'">글쓰기</button>
		@else
		@endif -->
	</div>


    </div>
</div>

</div>
</div>	
</div>
</div>

@endsection
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>		
	<style>
	a:hover {text-decoration: none}
</style>	

</head>
<body>

	@included('layouts.html_header')

	<div class="container" style="margin-top: 80px">

		<div class="row">

			<div class="col-lg-3">

				<h1 class="my-4">Coummunity</h1>
				<div class="list-group">
					<a href="Tboard.php" class="list-group-item">Notice</a>
					<a href="Tquestion.php" class="list-group-item">Q&A</a>
					<a href="Treview.php" class="list-group-item">Review</a>
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
				<td><a href=""> {{ $msg["title"] }} </a> </td>
				<td>{{ $msg["writer"] }} </td>
				<td>{{ $msg["regtime"] }} </td>
				<td>{{ $msg["hits"] }} </td>
			</tr>
	@endforeach


	</table>	

  
	<div class="float-right" style="margin-right:50px">	
		<button class="btn btn-primary" onclick="location.href='{{url('board/write_form')}}'">글쓰기</button>
	</div>


    </div>
</div>
</div>
</div>	
</div>
</div>


</body>


</html>
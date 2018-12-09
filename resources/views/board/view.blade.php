<html>
<head>
	<meta charset="UTF-8">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>		

</head>
<body>

	<div class="jumbotron">
		<h1> 게시글 상세 내용 </h1>
	</div>

	<div class="form-group">
		<label for="title">제목: </label>
		<input type="text" id="title" class="form-control" value="{{$msg['title']}}" >
	</div>
	
	<div class="form-group">
		<label for="writer">작성자: </label>
		<input type="text" id="writer" class="form-control" value="{{$msg['writer']}}" readonly >
	</div>

	<div class="form-group">
		<label for="regtime">작성일자: </label>
		<input type="text" id="regtime" class="form-control" value="{{$msg['regtime']}}" readonly>
	</div>


	<div class="form-group">
		<label for="hits">조회수: </label>
		<input type="text" id="hits" class="form-control" value="{{$msg['hits']}}" readonly>
	</div>

	
	<div class="form-group">
		<label for="content">내용: </label>
		<textarea rows="5" id="content"
			class="form-control" >{{$msg["content"]}}</textarea>
		<button onclick="location.href='{{url('board/board')}}/{{$msg['category']}}'" type="submit" class="btn btn-primary">목록보기</button>	
		<button class="btn btn-warning" onclick="location.href='{{url('board/modify_form')}}/{{$msg['num']}}'">수정</button>

		<form action="{{route('board.destroy',['board'=>$msg['num']])}}" method="post">    
        @csrf
        @method('delete')
        <button class="btn btn-danger" type="submit">삭제</button>
    	</form>
		
	</div>		
</body>
</html>
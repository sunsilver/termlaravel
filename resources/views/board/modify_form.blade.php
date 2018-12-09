<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
		<h1> 글 수정 폼</h1>
	</div>
	<form action="{{url('board/modify')}}" method="post">
		@csrf
		<input type="text" name="num" 
		value="{{ $msg['num'] }}" readonly
		hidden>
		<div class="form-group">
			<label for="title">제목: </label>
			<input type="text" id="title" name="title" class="form-control" 
			value="{{ $msg['title'] }}"
			required>
		</div>
		
		<div class="form-group">
			<label for="writer">작성자: </label>
			<input type="text" id="writer" name="writer" class="form-control"
			value="{{ $msg['writer'] }}"
			required readonly>
		</div>
		
		<div class="form-group">
			<label for="content">내용: </label>
			<textarea rows="5" id="content"
			name="content" class="form-control" required>{{ $msg['content'] }}</textarea>
			<button type="submit" 
			class="btn btn-primary">수정</button>	
			<button type="button" class="btn btn-danger">목록보기</button>
		</div>		
	</form>		

</body>
</html>
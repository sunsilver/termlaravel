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

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<style>
	table  { width: 100%; text-align: center; }
	th     { background-color: lightgray; }

	.left  { text-align: left;  }        
	.right { text-align: right; }

	a:hover { text-decoration: none; color: red;  }
	</style>

			
	</head>
	<body>

	<div class="jumbotron">
		<h1> 글 등록 폼</h1>
	</div>
	<form action="{{url('board/write/'.$category)}}" method="post" enctype="multipart/form-data">
	@csrf
		<div>
			<input type="file" name="image">
		</div>
		<div class="form-group">
			<label for="title">제목: </label>
			<input type="text" id="title" name="title" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label for="writer">작성자: </label>
			<input type="text" id="writer" name="writer" class="form-control" value="{{\Auth::user()['name']}}" readonly required>
		</div>
		
		<div class="form-group">
			<label for="content">내용: </label>
			<textarea rows="5" id="content"
			name="content" class="form-control" required></textarea>
		</div>
		<div>
		
		</div>

			<button type="submit" class="btn btn-primary">글등록</button>	
			<button onclick="location.href='{{url('board')}}'" class="btn btn-danger">목록보기</button>
</form>

	</body>
	</html>
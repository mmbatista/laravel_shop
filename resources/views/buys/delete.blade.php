<!DOCTYPE html>
<html>
<head>
	<title>Delete Buy</title>
</head>		
<body>
	<form method="POST" action="/buys/{{$buy->id}}">


		{{ method_field('DELETE') }}

		{{ csrf_field() }}
	 
		<h2>{{ "ID: " . $buy->id }}</h2>

		<label for="name">Delete buy? </label>
              
		<br> 

		<button type="submit" class="btn btn-primary">DELETE</button>

	</form>
</body>
</html>
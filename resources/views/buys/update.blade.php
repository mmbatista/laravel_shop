<!DOCTYPE html>
<html>
<head>
	<title>Update Buys</title>
</head>
<body>
	<form method="POST" action="/buys/{{$buy->id}}">


		{{ method_field('PATCH') }}

		{{ csrf_field() }}
	 
		<h2>{{ "ID: " . $buy->id }}</h2>

		<label for="name">Actual Quantity: </label> {{ $buy->quantity }}

        <div class="form-group">

            <label for="name">New Quantity: </label>
            <input type="text" class="form-control" id="quantity" name="quantity" required placeholder="{{ $buy->quantity}}">
            
        </div>

        <br>

    		<label for="name">Actual Client ID: </label> {{ $buy->client_id }}

        <div class="form-group">

            <label for="name">New Client ID: </label>
            <input type="text" class="form-control" id="client_id" name="client_id" required placeholder="{{ $buy->client_id}}">
            
        </div>
        
		<br>  
		

    		<label for="name">Actual Product ID: </label> {{ $buy->product_id }}

        <div class="form-group">

            <label for="name">New Product ID: </label>
            <input type="text" class="form-control" id="product_id" name="product_id" required value="{{ $buy->product_id}}">
            
        </div>
        
		<br> 
		<button type="submit" class="btn btn-primary">Update Client</button>

	</form>
</body>
</html>
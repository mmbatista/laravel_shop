@extends('layouts.master')

@section('content')

	<h4>Create Product</h4>

	<br>

	<form method="POST" action="/buys">

		{{ csrf_field() }}

		<div class="form-group">

			<ul>
				<li>
					<label for="name"> Product: </label>	
						<select name="product_id" class="form-control">
						     <option>Select Product</option><!--selected by default-->
						     @foreach($products as $product)
						         <option value="{{ $product->id }}">
						             {{ $product->description }}
						         </option>
						     @endforeach
					</select>
				</li>

				<br>

				<li>
					<label for="name">Quantity: </label>
					<input type="unsignedInteger" class="form-control" id="quantity" name="quantity" required>
				</li>

				<br>

				<li>
					<label for="name"> Client: </label>	
						<select name="client_id" class="form-control">
						     <option>Select Client</option><!--selected by default-->
						     @foreach($clients as $client)
						         <option value="{{ $client->id }}">
						             {{ $client->description }}
						         </option>
						     @endforeach
					</select>
				</li>
				
			</ul>

		</div>
		

		<button type="submit" class="btn btn-primary">Create Buy</button>

		<hr>

	</form>

@endsection
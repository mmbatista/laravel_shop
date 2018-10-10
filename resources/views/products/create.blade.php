@extends('layouts.master')

@section('content')
	<h4>Create Product</h4>

	<br>

	<form method="POST" action="/products">

		{{ csrf_field() }}

		<div class="form-group">
		
			<fieldset>

				<ul>
					<li>
						<label for="name">Product name: </label>
						<input type="text" id="name" name="name" required>
					</li>

					<br>

					<li>
						<label for="name">Segment: </label>
						<select id="segment" name="segment" required>
						    <option value="food">Food</option>
						    <option value="drinks">Drinks</option>
						    <option value="home">Home</option>
						    <option value="others">Others</option>
					  	</select>

					</li>

					<br>

					<li>
						<label for="name">Price: </label>
						<input type="double" id="price" name="price" value="0.00" required>
					</li>

					<br>
					
					<li>
						<label for="name"> Brand ID: </label>	
							<select name="brand_id">
							     <option>Select Brand</option><!--selected by default-->
							     @foreach($brands as $brand)
							         <option value="{{ $brand->id }}">
							             {{ $brand->description }}
							         </option>
							     @endforeach
							</select>
					</li>
				</ul>

				<button type="submit" class="btn btn-primary">Create product</button>

				<hr>
				
			</fieldset>

		</div>
		

	</form>
	
@endsection
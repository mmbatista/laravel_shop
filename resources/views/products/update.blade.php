@extends('layouts.master')

@section('content')

	<h4>Update Product</h4>

	<br>

	<form method="POST" action="/products/{{$product->id}}">

		{{ method_field('PATCH') }}

		{{ csrf_field() }}
	 
	 	<div class="actual-info">
			<label for="name">Actual product name: {{ $product->name }} </label> 
		</div>

        <div class="form-group">

            <label for="name">New Product Name: </label>
            <input type="text" class="form-control" id="name" name="name" required value="{{$product->name}}">
			
			<br>
           
            <label for="name">Segment: </label>
			<select id="segment" name="segment" required>
			    <option value="food">Food</option>
			    <option value="drinks">Drinks</option>
			    <option value="home">Home</option>
			    <option value="others">Others</option>
		  	</select>

			<br>

             <label for="name">Price: </label>
            <input type="double" class="form-control" id="price" name="price" required value="{{$product->price}}"> 

        	            
        </div>
        
		<br>  
		
	<button type="submit" class="btn btn-primary">Update product</button>

	</form>

@endsection
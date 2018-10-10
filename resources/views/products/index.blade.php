@extends('layouts.master')

@section('content')

<h2>Products</h2>

<table class="my-tables">
	
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Segment</th>
		<th style="width: 80px"></th>
		<th></th>
	</tr>

	@foreach($products as $product)

	<tr>
		<td> {{ $product->id }}</td>
		<td> {{ $product->name }} </td>
		<td> {{ $product->segment }} </td>
		<td> 
			<form method="get" action="/products/{{$product->id}}/edit">
						
					<button tabindex="0" class="j58 j181 j192 j193 j195 j196 j230" type="submit">
					<span class="j182">Edit</span><span class="j70"></span>
									
			</form>
		</td>
		<td>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary j58 j181 j192 j193 j195 j196 j230" data-toggle="modal" data-target="#exampleModal{{$product->id}}">
			  DELETE
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this product?</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        {{ "ID: " . $product->id . " / Name: " . $product->name }}
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn-delete" data-dismiss="modal">Close</button>		        
			        <form method="POST" action="/products/{{$product->id}}" class="form-container">
				  		{{ method_field('DELETE') }}

						{{ csrf_field() }}				 

				    	<button type="submit" class="btn" style="background-color:#d01e15e8">Delete</button>
					</form>
			      </div>
			    </div>
			  </div>
			</div>


			


			
<!-- 				<button class="j58 j181 j192 j193 j195 j196 j230" onclick="openForm()">delete</button>

				<div class="form-popup" id="myForm">
				  <form method="POST" action="/products/{{$product->id}}" class="form-container">
				  	{{ method_field('DELETE') }}

					{{ csrf_field() }}
				    <h1>DELETE</h1>

				    <label><b>Want to delete record?</b></label>
				  

				    <button type="submit" class="btn">Delete</button>
				    <button type="reset" class="btn cancel" onclick="closeForm()">Cancel</button>
				  </form>
				</div>
			 -->


	<!-- 		<form method="post" action="/products/{{$product->id}}">
					{{ method_field('DELETE') }}
						
					<button tabindex="0" class="j58 j181 j192 j193 j195 j196 j230" type="submit">
					<span class="j182">Delete</span><span class="j70"></span>

					<p id="demo"></p>
									
			</form> -->
		</td>

	</tr>

	@endforeach

</table>




<hr>

<form method="POST" action="/products">

	{{ csrf_field() }}

	<div class="form-group">
	
		<fieldset>

			<ul>
				<li>
					<label for="name">Product name: </label>
					<input type="text" id="name" name="name" required>
				</li>

				<li>
					<label for="name">Segment: </label>
					<select id="segment" name="segment" required>
					    <option value="food">Food</option>
					    <option value="drinks">Drinks</option>
					    <option value="home">Home</option>
					    <option value="others">Others</option>
				  	</select>

				</li>

				<li>
					<label for="name">Price: </label>
					<input type="double" id="price" name="price" value="0.00" required>
				</li>
				
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

		</fieldset>

	</div>
		
	@include('layouts.errors')

</form>

@endsection



<!-- 	<ul>
		@foreach($products as $product)

			<li>

				{{ 'ID: ' . $product->id . ' - ' . $product->name . ' - ' . $product->segment }}

				<a href="{{ url('/products/' . $product->id . '/edit') }}" class="btn btn-xs btn-info pull-right">Edit</a>

				<form method="POST" action="/products/{{$product->id}}">
			
					{{ method_field('DELETE') }}

					{{ csrf_field() }}

					<button type="submit" class="btn btn-primary">DELETE</button>
							
				</form>

				<hr>

			</li>

		@endforeach


	</ul>


	<form method="GET" action="/products/create">

		{{ csrf_field() }}

		<button type="submit" class="btn btn-primary">CREATE NEW PRODUCT</button>
				
	</form>


	<a href="{{ url('/products/create') }}" class="btn btn-xs btn-info pull-right">CREATE NEW PRODUCT</a>	 -->
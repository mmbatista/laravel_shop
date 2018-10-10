@extends('layouts.master')

@section('content')

	<h4>Update Brand</h4>

	<br>
		
		<form method="POST" action="/brands/{{$brand->id}}">


			{{ method_field('PATCH') }}

			{{ csrf_field() }}
		 
			<div class="actual-info">
				<label for="name">Actual Brand Name: </label> {{ $brand->name }}
			</div>

	        <div class="form-group">

	            <label for="name">New Brand Name: </label>
	            <input type="text" class="form-control" id="name" name="name" required">
	            
	        </div>
	        
			<br>  
			
			<button type="submit" class="btn btn-primary inline">Update brand</button>

		</form>

				
		<!-- Button trigger modal -->
		<button type="button" tabindex="0" class="btn btn-primary inline" data-toggle="modal" data-target="#exampleModal{{$brand->id}}">
		  DELETE
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this brand?</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        {{ "Brand name: " . $brand->name }}
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn-delete" data-dismiss="modal">Close</button>		        
		        <form method="POST" action="/brands/{{$brand->id}}" class="form-container">
			  		{{ method_field('DELETE') }}

					{{ csrf_field() }}				 

			    	<button type="submit" class="btn" style="background-color:#d01e15e8">Delete</button>
				</form>
		      </div>
		    </div>
		  </div>
		</div>

@endsection
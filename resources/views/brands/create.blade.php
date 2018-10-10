@extends('layouts.master')

@section('content')

	<form method="POST" action="/brands">

		{{ csrf_field() }}
	 

        <div class="form-group">

            <label for="name"> Brand Name: </label>
            <input type="text" class="form-control" id="name" name="name">
            
        </div>
        
		<br>  
		
		<button type="submit" class="btn btn-primary">Create brand</button>

		
		@include('layouts.errors')

		
	</form>

	<hr>


@endsection
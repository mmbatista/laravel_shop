@extends('layouts.master')

@section('content')

	<h4>Update Client</h4>

	<br>

	<form method="POST" action="/clients/{{$client->id}}">


		{{ method_field('PATCH') }}

		{{ csrf_field() }}

	 	<div class="actual-info">
			<label for="name">Actual Postcode </label> {{ $client->postcode }}
		</div>
        
        <div class="form-group">

            <label for="name">New Postcode: </label>
            <input type="text" class="form-control" id="postcode" name="postcode" required value="{{ $client->postcode}}">
            
        </div>

        <br>
        	<div class="actual-info">
    			<label for="name"; >Actual age </label> {{ $client->age }}
    		</div>
      
        <div class="form-group">

            <label for="name">New Age: </label>
            <input type="text" class="form-control" id="age" name="age" placeholder="55" >
            
        </div>
        
		<br>  
		
		<button type="submit" class="btn btn-primary">Update Client</button>

	</form>

@endsection
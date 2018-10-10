@extends('layouts.master')

@section('content')
	
	<h4>Create Client</h4>
	
	<br>

	<form method="POST" action="/clients">

		{{ csrf_field() }}

		<div class="form-group">
			
			<li>
				<label for="name">Postcode:</label>
				<input type="integer" class="form-control" name="postcode" id="postcode" required>
			</li>

			<li>
				<label for="age">Age:</label>
				<input type="unsignedInteger" class="form-control" name="age" id="age" required>
			</li>

			<br>

			<button type="sumbit" class="btn btn-primary">Create Client</button>

			<hr>

		</div>


	</form>
@endsection
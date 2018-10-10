@extends('layouts.master')

@section('content')

	<h2>Clients</h2>
	
	<table class="my-tables">
		<tr>
			<th>ID</th>
			<th>Age</th>
			<th style="width: 80px"></th>
			<th></th>
		</tr>

		@foreach($clients as $client)

			<tr>
				<td>{{ $client->id }}</td>
			
				<td>{{ $client->age }}</td>
			
				<td>
					<form method="GET" action="/clients/{{$client->id}}/edit">
						
						<button type="submit" class="btn btn-primary">EDIT</button>
								
					</form>

				</td>
		
				<td>
				<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$client->id}}">
					  DELETE
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this client?</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        {{ "Client ID: " . $client->id }}
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn-delete" data-dismiss="modal">Close</button>		        
					        <form method="POST" action="/clients/{{$client->id}}" class="form-container">
						  		{{ method_field('DELETE') }}

								{{ csrf_field() }}				 

						    	<button type="submit" class="btn" style="background-color:#d01e15e8">Delete</button>
							</form>
					      </div>
					    </div>
					  </div>
					</div>

				</td>
			</tr>
		
		@endforeach



	</table>

	<hr>
			
	<form method="POST" action="/clients">

		{{ csrf_field() }}

		<div class="form-group">
			
			<li>
				<label for="name">Postcode:</label>
				<input type="integer" name="postcode" id="postcode" required>
			</li>

			<li>
				<label for="age">Age:</label>
				<input type="unsignedInteger" name="age" id="age" required>
			</li>

			<button type="sumbit" class="btn btn-primary">Create Client</button>

		</div>

		@include('layouts.errors')
		
	</form>	
	

@endsection
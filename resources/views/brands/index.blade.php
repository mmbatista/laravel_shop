@extends ('layouts.master')

@section('content')

<h4>Brands</h4>

 <table class="my-tables">
 	<tr>
 		<th>Name</th>
 		<th style="width: 80px"></th>
 		<th></th>
 	</tr>
 	@foreach($brands as $brand)
 		<tr>

 			<td>
 				{{ $brand->name }}
 			</td>
 			
 			<td>
 				<form method="get" action="/brands/{{$brand->id}}/edit">
						
					<button tabindex="0" class="j58 j181 j192 j193 j195 j196 j230" type="submit">
					<span class="j182">Edit</span><span class="j70"></span>
				
					
				</form>

 			</td>

 			<td>
 				<!-- Button trigger modal -->
				<button type="button" tabindex="0" class="j58 j181 j192 j193 j195 j196 j230" data-toggle="modal" data-target="#exampleModal{{$brand->id}}">
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


 			</td>

		</tr>
	@endforeach

<hr>

</table>

<hr>

<form method="POST" action="/brands">

	{{ csrf_field() }}
 

    <div class="form-group">

        <label for="name"> Brand Name: </label>
        <input type="text" class="form-control" id="name" name="name">
        
    </div>
 	
	<button type="submit" class="btn btn-primary">Create brand</button>

	
	@include('layouts.errors')

	
</form>


	



@endsection




<!-- 

	<ul>
		
		@foreach($brands as $brand)

			<li>

				{{ $brand->name }}

				<br>

	

				<form method="get" action="/brands/{{$brand->id}}/edit">
						
					<button tabindex="0" class="j58 j181 j192 j193 j195 j196 j230" type="submit">
					<span class="j182">Edit</span><span class="j70"></span>
				</
					
				</form>

				<hr>

			</li>

		@endforeach
	</ul>
 -->








<!-- <!DOCTYPE html>
<html>
<head>
	<title>Brands</title>
</head>
<body>
	<ul>
		
		@foreach($brands as $brand)

			<li>

				{{ $brand->name }}

				<br>

								
				<a href="{{ url('/brands/' . $brand->id . '/edit') }}" class="btn btn-xs btn-info pull-right">Edit</a>

				<hr>

			</li>

		@endforeach
	</ul>
	

</body>
</html> -->
@extends('layouts.master')

@section('content')
	<ul>
		@foreach($buys as $buy)

			<li>
				{{ 'Buy id:' . $buy->id . '  / Product: ' . $buy->prodName . ' / Quantity: ' . $buy->quantity . ' / Client id: ' . $buy->client_id }}

				<br>
								
				<!-- <a href="{{ url('/buys/' . $buy->id . '/edit') }}" class="btn btn-xs btn-info pull-right">Edit</a>
				 -->
			
				<form method="POST" action="/buys/{{$buy->id}}">
						{{ method_field('DELETE') }}

						{{ csrf_field() }}
					<button type="submit" class="btn btn-primary">DELETE</button>
					
				</form>
				


				<hr>

			</li>

		@endforeach

	</ul>

@endsection
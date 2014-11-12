@extends('partials.master')

@section('content')
    
	<div class="container main">
		
		<div class="row">
			<div class="col-md-12">
				<h1>About</h1>
			</div>
			<div class="col-md-12">
				<h3><a href="https://twitter.com/setkyarwalar" target="_blank">I</a> created it for who is looking for greate developer, designer and any related IT industy job & and also who is looking to work at a Greate Company in Myanmar!</h3>
			</div>
			<div class="col-md-12">				
				<button type="button" class="btn btn-danger btn-lg btn-block"><h3>Total User Count </h3> ({{ $total_user }})</button>
			</div>
		</div>

	</div>

@stop
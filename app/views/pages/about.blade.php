@extends('partials.master')

@section('content')
    
	<div class="container main">
		
		<div class="row">
			<div class="col-md-12">
				<h1>About</h1>
			</div>
			<div class="col-md-12">
				<h3><a href="https://twitter.com/setkyarwalar" target="_blank">I</a> created it! You can help me also :D, See project on <a href="https://github.com/setkyar/myanmardevjobs/">Github</a>!</h3>
			</div>
			<div class="col-md-12">				
				<button type="button" class="btn btn-danger btn-lg btn-block"><h3>Total User Count </h3> ({{ $total_user }})</button>
			</div>
		</div>

	</div>

@stop
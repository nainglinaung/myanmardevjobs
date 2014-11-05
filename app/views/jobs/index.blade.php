@extends('partials.master')

@section('content')
    
	<div class="container">
		
		@include('partials.message')

	    <div class="jumbotron">
		    <h1>Developer Jobs</h1>
		    @if(Auth::check())
				<p class="lead">Hey! There are so many developers are visiting my sites for their oppoturnity! Create a new Job's advertise now.</p>		    	
		    @else
			    <p class="lead">If you are a IT company from Myanmar and you want to hire developers so, why you still haven't register!</p>
			    <p><a class="btn btn-lg btn-success" role="button" href="login/fb">Login with Facebook</a></p>
		    @endif
	    </div>

	    <div class="row marketing">
	    	<div class="col-lg-12">
	    		<div class="input-group">
	    			<input type="text" class="form-control" placeholder="Filter title, company, type, anything!">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">Search Jobs</button>
					</span>
	    		</div>
	    	</div>
	    </div>

	    <hr>

	    <div class="row marketing">
	    	@foreach($jobs as $job)
	      	<div class="col-md-12">
		    	<a href="#">
		      		<img src="/logos/449f0733e88bc390d759838121390f60.png" width="65" height="65" style="width: 65px;height: 65px; float: left; margin-right:10px;">
		      		<div style="padding-top:11px; display:block; color: #34495E;">
						<span style="float:right">Full Time</span>
						<a href="/jobs/{{ $job->id }}/{{ $job->position_title }}"><h3 style="margin:0; padding:0;">{{ $job->position_title }}</h3></a>
						<span style="float:right" class="glyphicon glyphicon-road">Yangon, Myanmar</span>
					</div>
					<div style="font-size:small; ">
						<strong>google.com</strong>
						<span>-- Inversting in our clients</span>
					</div>
		      	</a>
		      	<hr>
	      	</div>
	      	@endforeach
	      	<div class="col-md-12">
	      		<div class="pull-right">
	      			{{ $jobs->links(); }}
	      		</div>
	      	</div>
	    </div>
	</div>

@stop
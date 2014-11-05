@extends('partials.master')

@section('content')
    
	<div class="container">
		
		@include('partials.message')

		<div class="row">
			<div class="col-md-12">
				<h1>{{ $lister->position_title }}</h1>
				<hr>
			</div>
		</div>

	    <div class="row">
	    	<div class="col-md-4">
	    		<p>Company Name</p>
	    		<p>Company's Address</p>
	    		<p>Something Else</p>
	    	</div>
	    	<div class="col-md-8">
	    		<div class="row">
	    			<div class="col-md-8">
	    				<h4>{{ $lister->position_title }}</h4>		
	    			</div>
	    			<div class="col-md-4">
	    				<h4>Full Time</h4>
	    			</div>
	    			<div class="col-md-12">
	    				<hr><b>Job Description</b>
	    				<p>
	    					{{ $lister->jobs_description }}
	    				</p>
	    			</div>
	    			<div class="col-md-12">
	    				<hr><b>How to apply this Job?</b>
	    				<p>
	    					{{ $lister->jobs_apply }}
	    				</p>
	    			</div>
	    			<div class="col-md-12">
	    				<hr><b>You have sometrouble & Questions? Contact</b>
	    				<p>
	    					{{ $lister->jobs_apply }}
	    				</p>
	    			</div>
	    		</div>	    		
	    	</div>
	    </div>

	</div>

@stop
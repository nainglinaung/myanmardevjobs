@extends('partials.master')

@section('content')
    
	<div class="container main">
		
		@include('partials.message')

	    <div class="row">
	    	<div class="col-md-4">
	    		<img src="/logos/default.png" />
	    		<h2>{{ $lister->company->company_name }}</h2>
	    		<span>Address</span> <p>{{ $lister->company->company_address }}</p>
	    		<span>Website</span> <p>{{ $lister->company->company_website }}</p>

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
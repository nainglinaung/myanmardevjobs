@extends('partials.master')

@section('content')
    
	<div class="container main">
		
		@include('partials.message')

	    <div class="row">
	    	<div class="col-md-4">
	    		<div>
		    		@if(empty($lister->company->company_logo))
		      			<img src="/logos/default.png" width="100%">
		      		@else
		      			<img src="/upload/{{ $lister->company->company_logo }}" width="100%">
		      		@endif
	      		</div>
	    		<div>
		    		@if(!empty($lister->company->company_name))
		    			<h2>{{ $lister->company->company_name }}</h2>
					@else
						<strong>No Company's Name Describe</strong>
					@endif
				</div>
				<div>
		    		<span>Address</span> 
		    		@if(!empty($lister->company->company_address))
		    			<p>{{ $lister->company->company_address }}</p>
					@else
						<strong>No Company's Address Describe</strong>
					@endif
				</div>
	    		<div>
	    			<span>Website</span> 
	    			@if(!empty($lister->company->company_website))
		    			<p>{{ $lister->company->company_website }}</p>
					@else
						<strong>No Company's Website Describe</strong>
					@endif
	    		</div>
	    	</div>
	    	<div class="col-md-8">
	    		<div class="row">
	    			<div class="col-md-8">
	    				<h4>{{ $lister->position_title }}</h4>		
	    			</div>
	    			<div class="col-md-4">
	    				<h4>{{ $lister->job_type }}</h4>
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
	    			<div class="col-md-12">
	    				<hr><b>Share this Job!</b>
	    				<br><br>
	    				<p>
	    					<span class='st_sharethis_large' displayText='ShareThis'></span>
							<span class='st_facebook_large' displayText='Facebook'></span>
							<span class='st_twitter_large' displayText='Tweet'></span>
							<span class='st_linkedin_large' displayText='LinkedIn'></span>
							<span class='st_pinterest_large' displayText='Pinterest'></span>
							<span class='st_email_large' displayText='Email'></span>
	    				</p>
	    			</div>
	    		</div>	    		
	    	</div>
	    </div>

	</div>

@stop
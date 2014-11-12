@extends('partials.master')

@section('content')
    
	<div class="container main">
		@include('partials.message')
	    <div class="row">
	    	<div class="col-md-12">
	    		<h3>Your's Profile</h3>
	    		<hr>
	    	</div>
	    	<div class="col-md-4">	
	    		<img src="{{ $current_user->photo }}">
	    	</div>
	    	<div class="col-md-8">
	    		<p>{{ $current_user->name }}</p>
	    		<p>{{ $current_user->email }}</p>
	    	</div>
	    </div>  

	    <div class="row">
	    	<div class="col-md-12">
	    		<h3>Your's Company' Information</h3>
	    		<hr>
	    	</div>	    	
	    	@if(!empty($company))
	    	<div class="col-md-12">
	    		<div class="row">
	    			<div class="col-md-4">
	    				@if(!empty($company->company_logo))
	    					<img src="/upload/{{ $company->company_logo }}" width="100%">
	    				@else
	    					<img src="/logos/default.png" width="70%">
	    				@endif
	    			</div>
	    			<div class="col-md-8">
	    				<div><b>Company Name</b> - {{ $company->company_name }}</div>
	    				<div><b>Company Website</b> - {{ $company->company_website }}</div>
	    				<div><b>Company Address</b> - {{ $company->company_address }}</div>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="col-md-12">
	    		<div class="pull-right">
	    			<a href="/users/company/{{ $company->id }}/edit" class="btn btn-primary">Edit Company Info!</a>
	    		</div>
	    	</div>
	    	@else
	    	<div class="col-md-12">
	    		<div class="pull-right">
	    			<a href="/users/company/{{ $company->id }}/edit" class="btn btn-primary">Add your Company Info!</a>
	    		</div>
	    	</div>
	    	@endif()
	    </div>
	</div>

@stop
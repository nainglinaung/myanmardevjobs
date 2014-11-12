@extends('partials.master')

@section('content')
    
	<div class="container main">
		@include('partials.message')
	    <div class="row">
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
	    	@if(empty($company))
		    	<div class="col-md-12">
		    		{{ Form::open(array('url' => 'users/company')) }}
		    			<div class="form-group">
		    				{{ Form::label('Company Name') }}
		    				{{ Form::text('comapny_name', Input::old('comapny_name'), array('class' => 'form-control', 'placeholder' => 'Your Company Name')) }}
		    			</div>
		    			<div class="form-group">
		    				{{ Form::label('Company Website') }}
		    				{{ Form::text('company_website', Input::old('company_website'), array('class' => 'form-control', 'placeholder' => 'Your Company Website')) }}
		    			</div>
		    			<div class="form-group">
		    				{{ Form::label('Company Address') }}
		    				{{ Form::textarea('company_address', Input::old('company_address'), array('class' => 'form-control', 'placeholder' => 'Your Company Address')) }}
		    			</div>
		    			<button type="submit" class="btn btn-default pull-right">Save Company Info!</button>
		    		{{ Form::close() }}
		    	</div>
	    	@else
		    	<div class="col-md-12">
		    		<div class="pull-right">
		    			<a href="/users/company/{{ $company->id }}/edit" class="btn btn-primary">Edit Company Info!</a>
		    		</div>	    		
		    	</div>
		    	<div class="col-md-12">
		    		<div class="row">
		    			<div class="col-md-4">
		    				@if(!empty($company->company_logo))
		    					<img src="{{ $company->company_logo }}">
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
		    @endif
	    </div>
	</div>

@stop
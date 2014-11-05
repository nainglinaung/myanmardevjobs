@extends('partials.master')

@section('content')
    
	<div class="container">
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
	    	<div class="col-md-12">
	    		{{ Form::open(array('url' => 'users/user')) }}
	    			<div class="form-group">
	    				{{ Form::label('Company Name') }}
	    				{{ Form::text('position_title', Input::old('position_title'), array('class' => 'form-control', 'placeholder' => 'Your Company Name')) }}
	    			</div>
	    			<div class="form-group">
	    				{{ Form::label('Company Website') }}
	    				{{ Form::text('position_title', Input::old('position_title'), array('class' => 'form-control', 'placeholder' => 'Your Company Website')) }}
	    			</div>
	    			<div class="form-group">
	    				{{ Form::label('Company Address') }}
	    				{{ Form::textarea('jobs_description', Input::old('jobs_description'), array('class' => 'form-control', 'placeholder' => 'Your Company Address')) }}
	    			</div>
	    			<button type="submit" class="btn btn-default pull-right">Save Company Info!</button>
	    		{{ Form::close() }}
	    	</div>
	    </div>
	</div>

@stop
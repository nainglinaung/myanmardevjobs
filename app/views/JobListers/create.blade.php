@extends('partials.master')

@section('content')
    
	<div class="container main">
	    <div class="row">
	    	<div class="col-md-12">
	    		<h3>Advertise New Job!</h3>
	    		<hr>
	    	</div>
	    	<div class="col-md-12">	    		
	    		{{ Form::open(array('url' => 'users/joblisters')) }}
	    			<div class="form-group">
	    				{{ Form::label('Job Position Title') }}
	    				{{ Form::text('position_title', Input::old('position_title'), array('class' => 'form-control', 'placeholder' => 'Jobs Positions Title')) }}

	    				@if ($errors->has('position_title')) <p class="alert alert-danger error">{{ $errors->first('position_title') }}</p> @endif
	    			</div>
	    			<div class="form-group">
	    				{{ Form::label('Jobs Description') }}
	    				{{ Form::textarea('jobs_description', Input::old('jobs_description'), array('class' => 'form-control', 'placeholder' => 'Jobs Description')) }}

	    				@if ($errors->has('jobs_description')) <p class="alert alert-danger error">{{ $errors->first('jobs_description') }}</p> @endif
	    			</div>
	    			<div class="form-group">
	    				{{ Form::label('How to apply') }}
	    				{{ Form::textarea('jobs_apply', Input::old('jobs_apply'), array('class' => 'form-control', 'placeholder' => 'How to apply this job?')) }}

	    				@if ($errors->has('jobs_apply')) <p class="alert alert-danger error">{{ $errors->first('jobs_apply') }}</p> @endif
	    			</div>
	    			<div class="form-group">
	    				{{ Form::label('Contact Information') }}
	    				{{ Form::textarea('jobs_contact', Input::old('jobs_contact'), array('class' => 'form-control', 'placeholder' => 'Jobs Contact Information')) }}

	    				@if ($errors->has('jobs_contact')) <p class="alert alert-danger error">{{ $errors->first('jobs_contact') }}</p> @endif
	    			</div>
	    			<button type="submit" class="btn btn-default pull-right">Publish Your Job's Ad</button>
	    		{{ Form::close() }}
		    	
	    	</div>
	    </div>
	</div>

@stop
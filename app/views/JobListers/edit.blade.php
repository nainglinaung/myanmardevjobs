@extends('partials.master')

@section('content')
    
	<div class="container">
	    <div class="row">
	    	<div class="col-md-12">
	    		<h3>Edit your {{ $lister->position_title }} Job Advertising</h3>
	    		<hr>
	    	</div>
	    	<div class="col-md-12">	    		
	    		{{ Form::model($lister, array('route' => array('users.joblisters.update', $lister->id), 'method' => 'PUT')) }}
	    			<div class="form-group">
	    				{{ Form::label('Job Position Title') }}
	    				{{ Form::text('position_title', null, array('class' => 'form-control', 'placeholder' => 'Jobs Positions Title')) }}

	    				@if ($errors->has('position_title')) <p class="alert alert-danger error">{{ $errors->first('position_title') }}</p> @endif
	    			</div>
	    			<div class="form-group">
	    				{{ Form::label('Jobs Description') }}
	    				{{ Form::textarea('jobs_description', null, array('class' => 'form-control', 'placeholder' => 'Jobs Description')) }}

	    				@if ($errors->has('jobs_description')) <p class="alert alert-danger error">{{ $errors->first('jobs_description') }}</p> @endif
	    			</div>
	    			<div class="form-group">
	    				{{ Form::label('How to apply') }}
	    				{{ Form::textarea('jobs_apply', null, array('class' => 'form-control', 'placeholder' => 'How to apply this job?')) }}

	    				@if ($errors->has('jobs_apply')) <p class="alert alert-danger error">{{ $errors->first('jobs_apply') }}</p> @endif
	    			</div>
	    			<div class="form-group">
	    				{{ Form::label('Contact Information') }}
	    				{{ Form::textarea('jobs_contact', null, array('class' => 'form-control', 'placeholder' => 'Jobs Contact Information')) }}

	    				@if ($errors->has('jobs_contact')) <p class="alert alert-danger error">{{ $errors->first('jobs_contact') }}</p> @endif
	    			</div>
	    			<button type="submit" class="btn btn-default pull-right">Publish Your Job's Ad</button>
	    		{{ Form::close() }}
		    	
	    	</div>
	    </div>
	</div>

@stop
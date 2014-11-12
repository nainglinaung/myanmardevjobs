@extends('partials.master')

@section('content')
    
	<div class="container">
		
		<div class="row">
			<div class="col-md-12">
				<h1>Edit Your Company Info!</h1>
			</div>
			<div class="col-md-12">
				{{ Form::model($company, array('route' => array('users.company.update', $company->id), 'method' => 'PUT')) }}
	    			<div class="form-group">
	    				{{ Form::label('Company Name') }}
	    				{{ Form::text('comapny_name', null, array('class' => 'form-control', 'placeholder' => 'Your Company Name')) }}
	    			</div>
	    			<div class="form-group">
	    				{{ Form::label('Company Website') }}
	    				{{ Form::text('company_website', null, array('class' => 'form-control', 'placeholder' => 'Your Company Website')) }}
	    			</div>
	    			<div class="form-group">
	    				{{ Form::label('Company Address') }}
	    				{{ Form::textarea('company_address', null, array('class' => 'form-control', 'placeholder' => 'Your Company Address')) }}
	    			</div>
	    			<button type="submit" class="btn btn-default pull-right">Update Company Info!</button>
	    		{{ Form::close() }}
			</div>
		</div>

	</div>

@stop
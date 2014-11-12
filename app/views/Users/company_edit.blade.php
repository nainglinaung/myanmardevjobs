@extends('partials.master')

@section('content')

	<div class="container main">
		<div class="col-md-12">
			<h1>Edit Your Company Info!</h1>
		</div>
		<div class="col-md-12">
			{{ Form::model($company,array('route' => array('users.company.update', $company->id), 'method' => 'PUT', 'files' => true)) }}

				<div class="form-group">
    				{{ Form::label('Company Name') }}
    				{{ Form::text('company_name', null, array('class' => 'form-control', 'placeholder' => 'Your Company Name')) }}

    				@if ($errors->has('company_name')) <p class="alert alert-danger error">{{ $errors->first('company_name') }}</p> @endif
    			</div>
				<div class="form-group">
    				{{ Form::label('Company Image') }}
    				{{ Form::file('company_logo', null) }}

    				@if ($errors->has('company_logo')) <p class="alert alert-danger error">{{ $errors->first('company_logo') }}</p> @endif
    			</div>
    			<div class="form-group">
    				{{ Form::label('Company Website') }}
    				{{ Form::text('company_website', null, array('class' => 'form-control', 'placeholder' => 'Your Company Website')) }}

    				@if ($errors->has('company_website')) <p class="alert alert-danger error">{{ $errors->first('company_website') }}</p> @endif
    			</div>
    			<div class="form-group">
    				{{ Form::label('Company Address') }}
    				{{ Form::textarea('company_address', null, array('class' => 'form-control', 'placeholder' => 'Your Company Address')) }}

    				@if ($errors->has('company_address')) <p class="alert alert-danger error">{{ $errors->first('company_address') }}</p> @endif
    			</div>
    			<button type="submit" class="btn btn-default pull-right">Update Company Info!</button>

			{{ Form::close() }}
		</div>
	</div>

@stop
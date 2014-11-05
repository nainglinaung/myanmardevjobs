@extends('partials.master')

@section('content')
    
	<div class="container">
	    <div class="row">
	    	<div class="col-md-12">
	    		@if (Session::has('message'))
				    <div class="alert alert-info">{{ Session::get('message') }}</div>
				@endif
	    	</div>
	    	<div class="col-md-12">
	    		<div class="table-responsive">
		    		<table class="table table-striped">
				        <thead>
				          <tr>
				            <th>Position Title</th>
				            <th>Job Type</th>
				            <th>Edit Jobs</th>
				            <th>Delete Jobs</th>
				          </tr>
				        </thead>
				        <tbody>
				        @foreach($jobs as $job)
				          <tr>
				            <td>{{ $job->position_title }}</td>
				            <td>Full Time</td>
				            <td>
				            	<a href="{{ URL::to('users/joblisters/' . $job->id . '/edit') }}" class="btn btn-default">Edit Job</a>
				            </td>
				            <td>
				            	{{ Form::open(array('url' => 'users/joblisters/' . $job->id)) }}
				                    {{ Form::hidden('_method', 'DELETE') }}
				                    {{ Form::submit('Delete this job Advertising!', array('class' => 'btn btn-danger')) }}
                				{{ Form::close() }}
				            </td>
				          </tr>
				        @endforeach
				        </tbody>
	      			</table>
      			</div>
	    	</div>
	    	<div class="col-md-12">
	    		<div class="pull-right">
	    			{{ $jobs->links(); }}
	    		</div>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
	    		<a href="/users/joblisters/create"><div class="btn btn-default pull-right">Advertise New Position</div></a>
	    	</div>
	    </div>
	</div>

@stop
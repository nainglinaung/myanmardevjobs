@extends('partials.master')

@section('content')
    
	<div class="container">
	    <div class="row">
	    	<div class="col-md-12">
	    		<table class="table table-striped">
			        <thead>
			          <tr>
			            <th>Position Title</th>
			            <th>Total Click</th>
			            <th>Edit Jobs</th>
			            <th>Delete Jobs</th>
			          </tr>
			        </thead>
			        <tbody>
			        @foreach($jobs as $job)
			          <tr>
			            <td>{{ $job->position_title }}</td>
			            <td>10</td>
			            <td>
			            	<div class="btn btn-default">Edit Job</div>
			            </td>
			            <td>
			            	<div class="btn btn-default">Delete Job</div>
			            </td>
			          </tr>
			        @endforeach
			        </tbody>
      			</table>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
	    		<a href="/users/joblisters/create"><div class="btn btn-default pull-right">Advertise New Position</div></a>
	    	</div>
	    </div>
	</div>

@stop
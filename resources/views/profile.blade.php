@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        
		    <div class="page-header text-center">
		        <h1><span class="fa fa-anchor"></span> Profile Page</h1>
		    </div>
		
		    <div class="row">
		
		        <!-- LOCAL INFORMATION -->
		        <div class="col-sm-6">
		            <div class="well">
		                <h3><span class="fa fa-user"></span>User Profile</h3>
		
		                    <p>		                        
		                        <strong>email</strong>: {{Auth::user()->email}}<br>
		                        <strong>Name</strong>: {{Auth::user()->name}}<br>
		                    </p>
		
		            </div>
		        </div>
		
		    </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
    		<h1>Add an Event</h1> 
    		
			<form action="/addEventExisting" method="post" id="eventForm">
			{{csrf_field()}}
	        	<div class="form-group">
		            <label>Name</label>
		            <input type="text" class="form-control" name="name" required>
		        </div>
		        
		        <div class="form-group">
		            <label>Description</label>
		            <input type="text" class="form-control" name="description" required>
		        </div>
		        
		        <div class="form-group">
		            <label>Date</label>
		            <input type="text" class="form-control" name="date" required>
		        </div>
	        	
		    	<div class="form-group">
		            <label>Owner</label>
		            <select name="eventOwner">		            			            	
			            	@foreach ($groups as $group)
			            		<option value="{{$group->id}}">{{$group->name}}</option>
			            	@endforeach
		            </select>		            
		        </div>
		        
		        <div class="form-group">
		        	<label>Location</label><br>
		        	<input type="radio" onclick="existingLocationClick()" name="eventLocationType" value="existing" id="radioExisting" checked>&nbsp; Existing Location<br>
		        	<input type="radio" onclick="newLocationClick()" name="eventLocationType" value="new" id="radioNew">&nbsp; New Location<br>		        	
		        </div>
		        
		        <div id="locationNew" style="display: none;">
		        <div class="form-group" id="locationName">
		        	<label>Location Name</label>
		        	<input type="text" class="form-control" name="locationName" id="lnameInput">
		        </div>
		        
		        <div class="form-group" id="locationAddress">
		        	<label>Location Address</label>
		        	<input type="text" class="form-control" id="laddInput" name="locationAddress">
		        </div>
		        
		        <div class="form-group" id="locationCity">
		        	<label>Location City</label>
		        	<input type="text" class="form-control" id="llocInput" name="locationCity">
		        </div>
		        
		        <div class="form-group" id="locationState">
		        	<label>Location State</label>
		        	<input type="text" class="form-control" id="lstateInput" name="locationState">
		        </div>
		        
		        <div class="form-group" id="locationZip">
		        	<label>Location Zip</label>
		        	<input type="text" class="form-control" id="lzipInput" name="locationZip">
		        </div>
		        </div>
		        
		        <div class="form-group" id="locationExisting">
		        	<label>Existing Location</label>
		        	<select name="locationExisting">
		        		@foreach ($locations as $location)
		        			<option value="{{$location->id}}">{{$location->name}}</option>
		        		@endforeach
		        	</select>
		        </div>
		        
		        <button type="submit" class="btn btn-warning btn-lg"> Submit</button>
			</form>
	    </div>
    </div>
</div>

<script>
	function existingLocationClick(){
		document.getElementById("locationNew").style.display = "none";
		document.getElementById("locationExisting").style.display = "block";
		document.getElementById("eventForm").action = "/addEventExisting"

		document.getElementById('lzipInput').required = false;
		document.getElementById('lstateInput').required = false;
		document.getElementById('llocInput').required = false;
		document.getElementById('laddInput').required = false;
		document.getElementById('lnameInput').required = false;

	}

	function newLocationClick(){
		document.getElementById("locationNew").style.display = "block";
		document.getElementById("locationExisting").style.display = "none";
		document.getElementById("eventForm").action = "/addEventNew"

		document.getElementById('lzipInput').required = true;
		document.getElementById('lstateInput').required = true;
		document.getElementById('llocInput').required = true;
		document.getElementById('laddInput').required = true;
		document.getElementById('lnameInput').required = true;
	}
</script>

@endsection
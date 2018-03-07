@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
    		<h1>Add an Event</h1> 
    		
	        <form action="/eventAdd" method="post">
	        	<div class="form-group">
		            <label>Name</label>
		            <input type="text" class="form-control" name="eventName">
		        </div>
		        
		        <div class="form-group">
		            <label>Description</label>
		            <input type="text" class="form-control" name="eventDescription">
		        </div>
		        
		        <div class="form-group">
		            <label>Date</label>
		            <input type="text" class="form-control" name="eventDate">
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
		        	<input type="text" class="form-control" name="locationName">
		        </div>
		        
		        <div class="form-group" id="locationAddress">
		        	<label>Location Address</label>
		        	<input type="text" class="form-control" name="locationAddress">
		        </div>
		        
		        <div class="form-group" id="locationCity">
		        	<label>Location City</label>
		        	<input type="text" class="form-control" name="locationCity">
		        </div>
		        
		        <div class="form-group" id="locationState">
		        	<label>Location State</label>
		        	<input type="text" class="form-control" name="locationState">
		        </div>
		        
		        <div class="form-group" id="locationZip">
		        	<label>Location Zip</label>
		        	<input type="text" class="form-control" name="locationZip">
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
	}

	function newLocationClick(){
		document.getElementById("locationNew").style.display = "block";
		document.getElementById("locationExisting").style.display = "none";
	}
</script>

@endsection
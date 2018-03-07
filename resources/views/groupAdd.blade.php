@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    	<div class="col-sm-6 col-sm-offset-3">
    		<h1>Add a Game Group</h1> 
    	
			<form action="/addGroup" method="post">
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
		            <label>Games</label><br />
		        	    <select name="games[]" multiple size="25">		            			            	
			            	@foreach ($games as $game)
			            		<option value="{{$game->id}}">{{$game->name}}</option>
							@endforeach
						</select>
		            <p>Hold down Ctrl (WIN) / Command (MAC) burron to select multiple options.</p>
		        </div>
		        
		        <button type="submit" class="btn btn-warning btn-lg">Submit</button>
		    </form>
	    </div>    
    </div>
</div>
@endsection
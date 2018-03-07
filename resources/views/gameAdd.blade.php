@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="row">       
    	<div class="col-sm-6 col-sm-offset-3">
    		<h1>Add a Game</h1> 
			<form action="/addGame" method="post">
			{{csrf_field()}}
	        	<div class="form-group">
		            <label>Name</label>
		            <input type="text" class="form-control" name="name" required>
		        </div>
		        
		        <div class="form-group">
		            <label>Category</label>
		            <select name="categoryId">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" required>{{$category->name}} </option>
                    @endforeach
		            </select>
		        </div>
		        
		        <div class="form-group">
		            <label>Description</label>
		            <input type="text" class="form-control" name="description">
		        </div>
	        
	        	<div class="form-group">
		            <label>MSRP</label>
		            <input type="number" class="form-control" name="msrp" step="0.01" value="0.99">
		        </div>
		        
		        <div class="form-group">
		            <label>Minimum Players</label>
		            <input type="number" class="form-control" name="minPlayers" step="1" value="2">
		        </div>
		        
		        <div class="form-group">
		            <label>Maximum Players</label>
		            <input type="number" class="form-control" name="maxPlayers" step="1" value="2">
		        </div>
		        
		        <div class="form-group">
		            <label>Recommended Minimum Age</label>
		            <input type="number" class="form-control" name="recommendedAge" step="1" value="6">
		        </div>
		        
		        <div class="form-group">
		            <label>Average Playing Time in Minutes</label>
		            <input type="number" class="form-control" name="avgGameLength" step="1" value="30">
		        </div>
	        		    			        		        
		        <button type="submit" class="btn btn-warning btn-lg">Submit</button>
		    </form>
	    </div>
	    </div>             
    
    </div>
</div>
@endsection
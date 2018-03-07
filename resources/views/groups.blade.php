@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h2>Groups</h2>
        <table class = "table">
        	<tr>
        		<th>Name</th>	        		
        		<th>Description</th>	        		
        	</tr>			
		    @foreach ($groups as $group)
		        <tr>
			        <td><a href="/group/{{$group->id}}">{{$group->name}}</a></td>				        
			        <td>{{$group->description}}</td>				        
		        </tr>
		    @endforeach			
		</table>
    
    </div>
</div>
@endsection
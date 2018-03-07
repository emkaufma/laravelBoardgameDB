@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div>	        
	        <h2>Games</h2>
	        <table class = "table">
	        	<tr>
	        		<th>Name</th>	        		
	        		<th>Category</th>
	        		<th>Average Rating</th>
	        		<th>Age</th>
	        		<th>MSRP</th>
	        	</tr>			
                @foreach ($games as $game)
                	<tr>
				        <td><a href="/game/{{$game->id}}">{{$game->name}}</a></td>				        
                        <td>{{$game->category->name}}</td>
						<td>{{$game->avgRating}}</td>
				        <td>{{$game->recommendedAge}}</td>
				        <td>${{$game->msrp}}</td>
			        </tr>
                @endforeach
        	</table>
        </div>   
    </div>
</div>
@endsection
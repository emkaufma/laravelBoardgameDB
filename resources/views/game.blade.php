@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">                        
            <div class="jumbotron">
            	<table class="table">
            		<tr><th>{{$game->name}}</th><th>Game Details</th></tr>
            		<tr><td>Category</td><td>{{$game->category->name}}</td></tr>
            		<tr><td>Description</td><td>{{$game->description}}</td></tr>
            		<tr><td>MSRP</td><td>${{$game->msrp}}</td></tr>
            		<tr><td>Minimum Players</td><td>{{$game->minimumPlayers}}</td></tr>
            		<tr><td>Maximum Players</td><td>{{$game->maximumPlayers}}</td></tr>
            		<tr><td>Recommended Age</td><td>{{$game->recommendedAge}}</td></tr>
            		<tr><td>Average Game Length</td><td>{{$game->avgGameLength}}</td></tr>
            	</table>                                    
            </div>                    
        </div>
        <div class="row">
        	<h3>Reviews</h3>
        	<table class="table">
        	<tr>
        		<th>User</th>
        		<th>Rating</th>
        		<th>Comments</th>        		
        	</tr>
				@foreach ($game->review as $review)
				<tr>
        			<td>{{$review->user->name}}</td>
        			<td>{{$review->rating}}</td>
        			<td>{{$review->comments}}</td>
        		</tr>	
				@endforeach
			</table>
        </div>
    </div>
</div>
@endsection
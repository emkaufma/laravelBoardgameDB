@extends('layouts.app')
@section('content')
<div class="container">          
    <div class="row">                        
            <div class="jumbotron">
            	<table class="table">
            		<tr><th>{{$group->name}}</th><th>Group Details</th></tr>
					<tr><td>Games</td>
					<td>
						@foreach($group->game as $game)
   							<a href="/game/{{$game->id}}">{{ $game->name }}</a>
						@endforeach
					</td></tr>
            		<tr><td>Description</td><td>{{$group->description}}</td></tr>
            		<tr>
            			<td>Events</td>
            			<td>
            				@foreach ($group->event as $event)
            					<a href="/event/{{$event->id}}">{{ $event->name . " - " . $event->date . " - " . $event->location->name}}
            				@endforeach
            			</td>
        			</tr>
            	</table>                                        
            </div>             
        </div>
    
    </div>
</div>
@endsection
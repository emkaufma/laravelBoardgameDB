@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <h2>Events</h2>
        <table class = "table">
            <tr>
                <th>Name</th>	        		
                <th>Date</th>	        		
                <th>Location</th>	        		
            </tr>			
                @foreach ($events as $event)
                <tr>
                    <td><a href="/event/{{$event->id}}">{{$event->name}}</a></td>				        
                    <td>{{$event->date}}</td>
                    <td>{{$event->location->name}}</td>				        
                </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection
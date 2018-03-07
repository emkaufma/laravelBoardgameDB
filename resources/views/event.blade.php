@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="jumbotron">
        	<table class="table">
        		<tr><th>{{$event->name}}</th><th>Event Details</th></tr>
        		<tr><td>Date</td><td>{{$event->date}}</td></tr>
        		<tr><td>Location</td><td>{{$event->location->name}}</td></tr>
        		<tr><td>Address</td><td>{{$event->location->address}}</td></tr>
        		<tr><td>City</td><td>{{$event->location->city}}</td></tr>
        		<tr><td>State</td><td>{{$event->location->state}}</td></tr>
        		<tr><td>Zip</td><td>{{$event->location->zip}}</td></tr>
        		<tr><td>Description</td><td>{{$event->description}}</td></tr>
        	</table>            
        </div>    
    </div>
</div>
@endsection
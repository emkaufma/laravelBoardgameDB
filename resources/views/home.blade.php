@extends('layouts.app')

@section('content')
<div class="container">

    @if (Session::has('flash_message'))
        <div class="alert alert-success">
            <h2>{{Session::get('flash_message')}}</h2>
        </div>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="row">
        <div class="col-sm-8">            
            <div class="jumbotron">
    
                <h1>Board Game Database</h1>
                <p>Welcome to the Board Game Database. We are all games, all the time.</p>		            			        
            </div>              
        </div>
        <div class="col-sm-4">                
            <div class="well">
                @guest
                    <p>You're currently not logged in. Login or Register to experience all of the fun!</p>
                @else
                    <b>Welcome back {{ Auth::user()->name }}</b>
                    <ul>
                        <li><a href="/profile">User Profile</a></li>
                        <li><a href="/review">Add a Game Review</a></li> 
                        <li><a href="/gameAdd">Add a Game</a></li>
                        <li><a href="/groupAdd">Create a Group</a></li>
                        <li><a href="/eventAdd">Create an Event</a></li>                   		
                    </ul>
                @endguest
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection

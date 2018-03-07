@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">       
<div class="col-sm-6 col-sm-offset-3">
    <h1>Add a Game Review</h1> 
   
    <form action="/addReview" method="post">
        {{csrf_field()}}
            <div class="form-group">
            <label>Game</label>
            <select name="gameId">		            			            	
                    @foreach ($games as $game)
                        <option value="{{$game->id}}">{{$game->name}}</option>
                    @endforeach           	
            </select>
        </div>
        <div class="form-group">
            <label>Rating</label>
            <select name="rating">
                <option value="1">1 - Terrible</option>
                <option value="2">2 - Poor</option>
                <option value="3">3 - OK</option>
                <option value="4">4 - Good</option>
                <option value="5">5 - Great</option>
            </select>
        </div>
        <div class="form-group">
            <label>Comments</label>
            <input type="text" class="form-control" name="comments">
        </div>
        <button type="submit" class="btn btn-warning btn-lg">Submit</button>
    </form>
</div>
</div>     
</div>
@endsection

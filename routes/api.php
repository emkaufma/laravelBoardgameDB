<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('events', function() {
    return Event::all();
});

Route::get('games', function() {
    return Event::all();
});

Route::get('groups', function(){
    return Group::all();
});

Route::get('games/{id}', function(){
    $game = Game::findOrFail($id);
    $game->update($request->all());

    return $game;
});

Route::post('games', function(Request $request) {
    return Game::create($request->all);
});

Route::get('events/{id}', function(){
    $event = Event::findOrFail($id);
    $event->update($request->all());

    return $event;
});

Route::get('groups/{id}', function(){
    $group = Group::findOrFail($id);
    $group->update($request->all());

    return $group;
});

Route::middleware('auth:api')->post('/review', function(Request $request){
    $review = new App\Review();
    
    $review->userId = 5;
    $review->gameId = $request->gameId;
    $review->rating = $request->rating;
    $review->comments = $request->comments;
    $review->save();
    
    Session::flash('message', 'Successfully created review!');
    
    return view('home');   
});

//Route::group(array('prefix' => 'api', 'before' => 'auth'), function()
//{
      
 //});
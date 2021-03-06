<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/event/{id}', function($id){
    return view('event', ['event' => App\Event::find($id)]);
});

Route::get('/events', function(){
    $events = App\Event::with('location')->get();
    return view('events', ['events' => $events]);
});

Route::get('/eventAdd', function(){
    return view('eventAdd', ['locations' => App\Location::all(), 'groups' => App\Group::all()]);
});

Route::get('/game/{id}', function($id){
    return view('game', ['game' => App\Game::find($id)]);
});

Route::get('/gameAdd', function(){
    return view('gameAdd', ['categories' => App\Category::all()]);
});

Route::get('/games', function(){

    $games = App\Game::orderBy('name')->with(['review', 'category'])->get();

    foreach($games as $game){
        $count = 0.0;

        foreach($game->review as $review){
            $count += $review->rating;
        }
        if($game->review->count() > 0){
            $game->avgRating = round($count/$game->review->count(), 2);
        }

        else{
            $game->avgRating = 0;
        }
    }

    return view('games', ['games' =>  $games]);
});

Route::get('/groupAdd', function(){
    return view('groupAdd', ['games' => App\Game::all()]);
});

Route::get('/groups', function(){
    return view('groups', ['groups' => App\Group::all()]);
});

Route::get('group/{id}', function($id){
    return view('group', ['group' => App\Group::find($id)]);
 });
 

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/review', function(){
    $games = App\Game::orderBy('name')->get();

    return view('review', ["games" => $games]);
});

Route::post('/addReview', function(Request $request){
    $review = new App\Review();
    
    $review->userId = Auth::user()->id;
    $review->gameId =  $request->gameId;
    $review->rating = $request->rating;
    $review->comments = $request->comments;
    $review->save();
        
    return redirect()->route('home')->withFlashMessage('Review Created Successfully.');;
})->middleware('auth');

Route::post('/addGame', function(Request $request){
    $game = new App\Game();
    
    $game->name =  $request->name;
    $game->description = $request->description;
    $game->msrp = $request->msrp;
    $game->minimumPlayers = $request->minPlayers;
    $game->maximumPlayers = $request->maxPlayers;
    $game->recommendedAge = $request->recommendedAge;
    $game->categoryId = $request->categoryId;
    $game->avgGameLength = $request->avgGameLength;

    $game->save();
        
    return redirect()->route('home')->withFlashMessage('Game Created Successfully.');;
})->middleware('auth');

Route::post('/addGroup', function(Request $request){
    $group = new App\Group();
    
    $group->name =  $request->name;
    $group->description = $request->description;

    $group->save();

    foreach($request->games as $id){
        $group->game()->attach($id);
    }
       
    return redirect()->route('home')->withFlashMessage('Group Created Successfully.');;
})->middleware('auth');

Route::post('/addEventExisting', function(Request $request){
    $event = new App\Event();

    $event->name = $request->name;
    $event->date = $request->date;
    $event->description = $request->description;
    $event->ownerTypeId = 2;
    $event->ownerId = $request->eventOwner;
    $event->locationId = 1;
    $event->save();

    $location = App\Location::findOrFail($request->locationExisting);
    $event->location()->associate($location);
    $event->save();

    //$event->location()->save(App\Location::find($request->locationExisting));

    return redirect()->route('home')->withFlashMessage('Event Created Successfully.');;
})->middleware('auth');

Route::post('/addEventNew', function(Request $request){
    $location = new App\Location();
    $location->name = $request->locationName;
    $location->address = $request->locationAddress;
    $location->city = $request->locationCity;
    $location->state = $request->locationState;
    $location->zip = $request->locationZip;
    $location->save();

    $event = new App\Event();

    $event->name = $request->name;
    $event->date = $request->date;
    $event->description = $request->description;
    $event->ownerTypeId = 2;
    $event->ownerId = $request->eventOwner;
    $event->locationId = 1;
    $event->save();

    $event->location()->associate($location);
    $event->save();

    //$event->location()->save(App\Location::find($request->locationExisting));

    return redirect()->route('home')->withFlashMessage('Event Created Successfully.');;
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



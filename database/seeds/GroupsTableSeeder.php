<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql =
        '
        INSERT INTO groups (id, name, description) VALUES ("1","Chess Club","We play chess and stuff."), 
        ("2","Games With Friends","Come join us to make new friends! Were super nice!"), 
        ("3","Beers and Games","Do you like beer? Do you like games? If so, come party!"), 
        ("4","After School Special","A club for kids to meet after school and play games."), 
        ("5","Women Gamers Club","We are women who like to game. Girls only!"), 
        ("6","Seattle Players","We are a Seattle based gaming club that meets every Tuesday night. Umbrellas options."), 
        ("7","Los Angeles Fun Group","Play board games with glamorous Hollywood stars!"), 
        ("8","San Diego Meetup","We like games and Sea World and stuff…"), 
        ("9","Cards, Dice, and Stuff","We play all kinds of games. A different kind every week."), 
        ("10","Best Game Club","This is the game club to end all game clubs. Other clubs wish they were us."), 
        ("11","Kids Game Group","A great place for kids (and parents) to make new friends."), 
        ("12","Catan Kings","We love two things Catan and Cards Against Humanity!"); ';

        DB::select(DB::raw($sql));

    }
}

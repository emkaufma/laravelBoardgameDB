<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = '
        INSERT INTO reviews (id, userId, gameId, date, rating, comments) VALUES ("1","74","43","April 8, 2016","2","Ive played better."), 
        ("2","19","61","April 13, 2016","3",NULL), 
        ("3","10","30","May 9, 2016","1",NULL), 
        ("4","71","61","May 13, 2016","4","This game was great!!"), 
        ("5","77","1","May 22, 2016","1",NULL), 
        ("6","44","37","June 20, 2016","1","Worst game ever."), 
        ("7","64","50","July 3, 2016","2",NULL), 
        ("8","89","2","July 8, 2016","2",NULL), 
        ("9","40","43","July 14, 2016","4","Amazing!!!"), 
        ("10","11","64","July 15, 2016","2",NULL), 
        ("11","33","19","August 5, 2016","3",NULL), 
        ("12","2","66","August 16, 2016","5","Must buy!"), 
        ("13","50","29","September 2, 2016","1",NULL), 
        ("14","40","70","September 9, 2016","2",NULL), 
        ("15","79","68","September 14, 2016","5",NULL), 
        ("16","62","58","October 3, 2016","3",NULL), 
        ("17","2","64","October 10, 2016","4",NULL), 
        ("18","82","18","October 28, 2016","1","Avoid this game at all costs."), 
        ("19","24","38","November 1, 2016","3",NULL), 
        ("20","93","50","November 22, 2016","3",NULL), 
        ("21","42","45","December 1, 2016","5","Sell your first born to buy this game if you have to."), 
        ("22","29","72","December 8, 2016","3",NULL), 
        ("23","77","52","January 21, 2017","3",NULL), 
        ("24","91","51","February 19, 2017","2",NULL), 
        ("25","91","34","February 23, 2017","5",NULL), 
        ("26","4","18","March 3, 2016","5","I play every day!"), 
        ("27","21","23","March 19, 2016","4",NULL), 
        ("28","53","15","March 31, 2016","5",NULL), 
        ("29","89","11","April 2, 2016","1","My girlfriend dumped me because I made her play this dumb game."), 
        ("30","39","58","April 4, 2016","4",NULL), 
        ("31","2","52","April 17, 2016","3",NULL), 
        ("32","25","56","April 19, 2016","1",NULL), 
        ("33","39","66","June 15, 2016","4",NULL), 
        ("34","74","54","July 3, 2016","4","Would recommend!"), 
        ("35","22","38","July 26, 2016","4",NULL), 
        ("36","30","24","August 18, 2016","2",NULL), 
        ("37","21","22","August 20, 2016","4",NULL), 
        ("38","73","3","August 30, 2016","2",NULL), 
        ("39","93","18","September 9, 2016","3",NULL), 
        ("40","90","69","November 11, 2016","1",NULL), 
        ("41","73","46","November 12, 2016","4",NULL), 
        ("42","41","30","November 24, 2016","1",NULL), 
        ("43","41","43","November 28, 2016","5",NULL), 
        ("44","99","60","December 4, 2016","4",NULL), 
        ("45","48","61","December 15, 2016","1","Never again! : ("), 
        ("46","16","35","December 23, 2016","3",NULL), 
        ("47","24","73","January 1, 2017","5","This is my favorite game ever!"), 
        ("48","64","9","January 8, 2017","1",NULL), 
        ("49","64","4","January 20, 2017","3",NULL), 
        ("50","8","23","February 1, 2017","5","So good!"), 
        ("52","101","2","February 24, 2017","3","Not as hard as chess."), 
        ("53","101","8","February 26, 2017","5","Playing this game is the most fun Ive had in ages."), 
        ("54","102","37","February 26, 2017","4","I love this game!");
        ';

        DB::select(DB::raw($sql));

    }
}

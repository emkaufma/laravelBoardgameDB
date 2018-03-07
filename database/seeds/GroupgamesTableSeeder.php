<?php

use Illuminate\Database\Seeder;

class GroupgamesTableSeeder extends Seeder
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
        INSERT INTO game_group (game_id, group_id) VALUES ("8","30"), 
        ("7","7"), 
        ("6","5"), 
        ("5","49"), 
        ("4","8"), 
        ("3","60"), 
        ("2","62"), 
        ("1","28"), 
        ("9","11"), 
        ("10","59"), 
        ("11","19"), 
        ("13","36"), 
        ("12","8"), 
        ("12","3");
        ';

        DB::select(DB::raw($sql));
    }
}

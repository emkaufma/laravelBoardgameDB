<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = '
        INSERT INTO categories (id , name) VALUES ("1","Strategy"),("2","Children"),("3","Party"),("4","Card"),("5","Dice"),("6","Adventure"),("7","Fantasy"),("8","Fighting"),("9","Horror"),("10","MatureAdult"),("11","Memory"),("12","Nautical"),("13","Novel-based"),("14","MurderMystery"),("15","Science Fiction"),("16","Economic"),("17","Farming"),("18","Humor"),("19","Math"),("20","Music"),("21","Puzzle"),("22","Zombies"),("23","War"),("24","Trivia"),("25","Educational");
        ';

        DB::select(DB::raw($sql));
    }
}

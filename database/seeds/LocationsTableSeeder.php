<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => "Phoenix Public Library",
            'address' => "101 Main St.",
            'city' => "Phoenix",
            'state' => "AZ",
            'zip' => "54321",
        ]);

        DB::table('locations')->insert([
            'name' => "Blue Highway Games",
            'address' => "2203 Queen Anne Ave N",
            'city' => "Seattle",
            'state' => "WA",
            'zip' => "98109",
        ]);

        DB::table('locations')->insert([
            'name' => "Dice Age Games",
            'address' => "5107 NE 4th Plain Blvd",
            'city' => "Vancouver",
            'state' => "WA",
            'zip' => "98661",
        ]);

        DB::table('locations')->insert([
            'name' => "Next-Gen Games",
            'address' => "5360 Wilshire Blvd",
            'city' => "Los Angeles",
            'state' => "CA",
            'zip' => "90036",
        ]);

        DB::table('locations')->insert([
            'name' => "Turn Zero Games",
            'address' => "3959 Wilshire Blvd",
            'city' => "Los Angeles",
            'state' => "CA",
            'zip' => "90010",
        ]);

        DB::table('locations')->insert([
            'name' => "Game Empire",
            'address' => "7051 Clairemont Mesa Blvd #306",
            'city' => "San Diego",
            'state' => "CA",
            'zip' => "92111",
        ]);

        DB::table('locations')->insert([
            'name' => "Board Game Barrister",
            'address' => "6120 W Layton Ave",
            'city' => "Greenfield",
            'state' => "WI",
            'zip' => "53220",
        ]);

        DB::table('locations')->insert([
            'name' => "The Compleat Strategist",
            'address' => "11 E 33rd St",
            'city' => "New York",
            'state' => "WI",
            'zip' => "11016",
        ]);

        DB::table('locations')->insert([
            'name' => "Phoenix Community Center",
            'address' => "123 Main St",
            'city' => "Phoenix",
            'state' => "AZ",
            'zip' => "54321",
        ]);
    }
}

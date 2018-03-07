<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => "New Friend Time",
            'description' => "Monthly friend meeting",
            'locationId' => 2,
            'ownerId' => 2,
            'ownerTypeId' => 2,
            'date' => "March 1st, 2017"
        ]);

        DB::table('events')->insert([
            'name' => "Barbara's Birthday Bash",
            'description' => "Barbara is getting older. Help her forget by playing games with her and her friends",
            'locationId' => 8,
            'ownerId' => 6,
            'ownerTypeId' => 1,
            'date' => "March 14th, 2017"
        ]);

        DB::table('events')->insert([
            'name' => "Game Meet Up",
            'description' => "I'm new to the city. I hope to meet some other cool gamers",
            'locationId' => 8,
            'ownerId' => 16,
            'ownerTypeId' => 1,
            'date' => "March 20th, 2017"
        ]);

        DB::table('events')->insert([
            'name' => "Beer-Thirty",
            'description' => "It's time to drink! And play games! And Drink!",
            'locationId' => 4,
            'ownerId' => 3,
            'ownerTypeId' => 2,
            'date' => "March 20th, 2017"
        ]);

        DB::table('events')->insert([
            'name' => "After school meet up",
            'description' => "Let's meet after school for games!",
            'locationId' => 7,
            'ownerId' => 4,
            'ownerTypeId' => 2,
            'date' => "March 21st, 2017"
        ]);

        DB::table('events')->insert([
            'name' => "Girls Night Out",
            'description' => "This week we are playing Catan.",
            'locationId' => 3,
            'ownerId' => 5,
            'ownerTypeId' => 2,
            'date' => "March 8th, 2017"
        ]);

        DB::table('events')->insert([
            'name' => "Seattle Meet Up",
            'description' => "Hey Seattle, let's play!",
            'locationId' => 2,
            'ownerId' => 6,
            'ownerTypeId' => 2,
            'date' => "March 10th, 2017"
        ]);

        DB::table('events')->insert([
            'name' => "Sun's Out, Pun's Out",
            'description' => "Avoid the sun with us!",
            'locationId' => 5,
            'ownerId' => 7,
            'ownerTypeId' => 2,
            'date' => "March 26th, 2017"
        ]);

        DB::table('events')->insert([
            'name' => "Beach Bum Gaming",
            'description' => "We're not actually going to play on the beach.",
            'locationId' => 6,
            'ownerId' => 8,
            'ownerTypeId' => 2,
            'date' => "March 30th, 2017"
        ]);
    }
}

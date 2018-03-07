<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       $this->call(UsersTableSeeder::class);
       $this->call(GamesTableSeeder::class);
       $this->call(CategoriesTableSeeder::class);
       $this->call(EventsTableSeeder::class);
       $this->call(GroupsTableSeeder::class);
       $this->call(LocationsTableSeeder::class);
       $this->call(ReviewsTableSeeder::class);
       $this->call(GroupgamesTableSeeder::class);
       $this->call(FavoritegamesTableSeeder::class);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        $this->call(CountriesSeeder::class);
        $this->call(CitiesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PropertyListingSeeder::class);
        $this->call(ListingImageSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(CommentsSeeder::class);
        


    }
}

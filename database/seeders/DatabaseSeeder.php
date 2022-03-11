<?php

namespace Database\Seeders;

use App\Models\Ads;
use App\Models\Books;
use App\Models\Categories;
use App\Models\Order;
use App\Models\RecomendedBooks;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            Categories::class ,
            Ads::class ,
            Books::class ,
            Order::class ,
            RecomendedBooks::class
        ]);
    }
}

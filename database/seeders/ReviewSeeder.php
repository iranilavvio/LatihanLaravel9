<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // truncate comments table
        // DB::table('reviews')->truncate();

          // definisi faker
          $faker = Factory::create();

          // get data body and user_id
          $body = $faker->sentence;
          $user_id = \App\Models\User::isUser()->inRandomOrder()->first()->id;
  
          // store to variable
          $attr = [
              'body' => $body,
              'user_id' => $user_id,
          ];
  
          $book = Book::find(1); // get book where id = 1
          $book->reviews()->create($attr); // insert to review table where reviewable_id = 1 and reviewable_type = 'App\Models\Blog'
    }
}

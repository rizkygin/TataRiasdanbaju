<?php

use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create(); //import library Faker
      $limit = 5; //batasan berapa banyak data atau kolom

      for($i =0 ;$i<$limit ; $i++){
        DB::table('User')->insert([//mengisi data di Database
          'nama' => $faker->name,
          'email'=> $faker->unique()->email, //email unique sehingga tidak ada yang sama
          'username' => $faker->username,
          'password' => $faker->password,
        ]);
      }
    }
}

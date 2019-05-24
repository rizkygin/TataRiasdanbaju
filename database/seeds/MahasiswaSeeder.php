<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
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
          DB::table('barang')->insert([//mengisi data di Database
            'nama_barang'=> $faker->name, //email unique sehingga tidak ada yang sama
          ]);
        }
    }
}

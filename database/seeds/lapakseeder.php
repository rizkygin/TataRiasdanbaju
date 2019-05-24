<?php

use Illuminate\Database\Seeder;

class lapakseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library Faker
        $limit = 20; //batasan berapa banyak data atau kolom
        $no = 1;
        for($i =0 ;$i<$limit ; $i++){
          DB::table('lapak')->insert([//mengisi data di Database
            'nama_lapak'=> $faker->name, //email unique sehingga tidak ada yang sama
            'alamat' => $faker->address,
            'id_barang' => $no,
          ]);
          $no++;
        }
    }
}

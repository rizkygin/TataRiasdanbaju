<?php

use Illuminate\Database\Seeder;

class tablebarangseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library Faker
        $no = 3;
        for($i =0 ;$i<20 ; $i++){
          DB::table('barang')->insert([
            'nama_barang'=>$faker->name,
            'harga_barang'=>rand(1000,1000000),
            'id_lapak' => $no,
            'id_cus' => $no,
            'id_transaksi' => $no,
          ]);
          $no++
        }
    }
}

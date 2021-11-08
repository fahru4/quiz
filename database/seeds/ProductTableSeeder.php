<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
 
    	for($i = 1; $i <= 300; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('table_product')->insert([
    			'id_category'=> $faker->unique()->numberBetween(1),
                'id_product_detail' => $faker->unique()->numberBetween(1),
                'name' => $faker->sentence(3),
                'price'=> $faker->numberBetween($min = 500, $max = 8000),
                'stock' => $faker->name,
                'created_at' => \Carbon\Carbon::now()
    		]);
 
    	}
    }
}

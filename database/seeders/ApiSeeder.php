<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Api;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach(range(1,10) as $value){
        	DB::table('apis')->insert([
              'name' => $faker->name(),
              'email' => $faker->email(),
              'password' => $faker->randomFloat(6),
              'address' => $faker->address(),
        	]);
        }
    }
}

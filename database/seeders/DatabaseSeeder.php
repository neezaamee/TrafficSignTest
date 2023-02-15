<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $Faker = Faker::create();
        foreach(range(1,10) as $value){
            DB::table('questions')->insert([
                'qtxt' => $Faker->words(10, true),
                //'qtxt' => $Faker->sentence(10),
                //'qtxt' => $Faker->text(10),
                'qimg' => $Faker->unique()->safeEmail(),
                'qaudio' => Str::random(10),
                'category' => $Faker->randomDigitNotNull(),
                'lang' => 'ur',
                'status' => $Faker->randomDigit(),
            ]);
        }
    }
}

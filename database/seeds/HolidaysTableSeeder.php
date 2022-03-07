<?php
use Faker\Generator as Faker;
use app\holiday;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
    public function run(faker $faker)
    {
        for ($i=0; $i < 11 ; $i++) { 
            $holiday = new holiday();

            $holiday->destination = $faker->city();

            $holiday->save();
        }
    }
}

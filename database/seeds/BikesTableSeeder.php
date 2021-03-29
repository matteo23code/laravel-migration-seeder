<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Bike;

class BikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $bike = new Bike();
            $bike->brand = 'Cube';
            $bike->name = $faker->name();
            $bike->type = 'MTB';
            $bike->size = rand(26, 29);
            $bike->image = 'https://www.cube.eu/media_ftp/BIKE_Bilder_2020/355300/355300_light_zoom.jpg';
            $bike->price = rand(1000, 10000);
            $bike->color = $faker->name();
            $bike->save();
        }
    }
}

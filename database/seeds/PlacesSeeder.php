<?php

use Illuminate\Database\Seeder;
use App\Place;
class PlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++) {
            $place = new Place();
            $place->busy = 0;
            $place->number = 'none';
            $place->endTime = new DateTime();
            $place->minutes = 0;
            $place->price = 0;
            $place->user_id = 1;
            $place->save();
        }




    }
}

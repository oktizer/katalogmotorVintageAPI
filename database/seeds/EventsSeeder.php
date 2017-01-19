<?php

use Illuminate\Database\Seeder;
use App\Models\EventsModels;
class EventsSeeder extends Seeder {

    public function run()
    {
        DB::table('events')->delete();
        EventsModels::create([
            'name' => 'Vintage Market Bazaar',
            'location'=> 'Lapangan Gasibu',
            'description'=>'Bazar Murah part dan aksesoris motor vintage',
            'lat'=>-6.900429,
            'lng'=>107.618715,
            'time'=>'2016-12-11 10:30:00'
        ]);

        EventsModels::create([
            'name' => 'Drag Race Classic Bike',
            'location'=> 'Brigif',
            'description'=>'Balap Motor - motor clasic',
            'lat'=>-6.892462,
            'lng'=>107.529267,
            'time'=>'2017-12-10 10:30:00'
        ]);

        EventsModels::create([
            'name' => 'Bikers Brotherhood meet up',
            'location'=> 'TSM',
            'description'=>'Acara Komunitas Brotherhood',
            'lat'=>-6.9256855,
            'lng'=>107.6361317,
            'time'=>'2016-12-11 10:30:00'
        ]);
    }
}
<?php

use Illuminate\Database\Seeder;
use App\Models\ServiceInfoModels;
class InfoServisSeeder extends Seeder {

    public function run()
    {
        DB::table('serviceinfos')->delete();

        ServiceInfoModels::create([
            'id_motorcycle' => 1,
            'history'=> 'Servis rutin',
            'time_service' => '2015-10-11'
        ]);

        ServiceInfoModels::create([
            'id_motorcycle' => 2,
            'history'=> 'Turun Mesin',
            'time_service' => '2014-10-12'
        ]);

        ServiceInfoModels::create([
            'id_motorcycle' => 3,
            'history'=> 'Perbaiki kelistrikan',
            'time_service' => '2013-10-12'
        ]);
    }
}
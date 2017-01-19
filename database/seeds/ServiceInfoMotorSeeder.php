<?php

use Illuminate\Database\Seeder;
use App\Models\ServiceInfoModels;
class ServiceInfoMotorSeeder extends Seeder {

    public function run()
    {
        DB::table('serviceinfos')->delete();

        ServiceInfoModels::create([
            'id_motorcycle' => 1,
            'history' => 'Service Rutin',
            'time'=> '2014-11-11'
        ]);

        ServiceInfoModels::create([
            'id_motorcycle' => 2,
            'history' => 'Turun Mesin',
            'time'=> '2015-10-11'
        ]);

        ServiceInfoModels::create([
            'id_motorcycle' => 3,
            'history' => 'Perbaiki Kelistrikan',
            'time'=> '2016-11-11'
        ]);
    }
}
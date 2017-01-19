<?php

use Illuminate\Database\Seeder;
use App\Models\AccesoriesModels;
class AccesoriesSeeder extends Seeder {

    public function run()
    {
        DB::table('accesories')->delete();

        AccesoriesModels::create([
            'id_motorcycles' => 1,
            'name'=> 'Spion Chrome',
            'description' => 'Spion chrome klasik bulat'
        ]);

        AccesoriesModels::create([
            'id_motorcycles' => 1,
            'name'=> 'Tangki tear drop',
            'description' => 'tangki bensin berbentuk tear'
        ]);

        AccesoriesModels::create([
            'id_motorcycles' => 1,
            'name'=> 'Sarung jok retro',
            'description' => 'Sarung jok bergaya retro'
        ]);
    }
}
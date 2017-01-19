<?php

use Illuminate\Database\Seeder;
use App\Models\CategoriesModels;
class CategoriesSeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->delete();

        CategoriesModels::create([
            'name' => 'Cafe Racer',
            'description' => 'Tampilan racing classic dengan style merunduk ala pembalap'
        ]);

        CategoriesModels::create([
            'name' => 'Cruiser',
            'description' => 'Tampilan  motor penjelajah jarak jauh'
        ]);

        CategoriesModels::create([
            'name' => 'Scrambler',
            'description' => 'Tampilan  motor segala medan'
        ]);
    }
}
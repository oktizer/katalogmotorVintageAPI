<?php

use Illuminate\Database\Seeder;
use App\Models\NewsCategoryModels;
class NewsCategoriesSeeder extends Seeder {

    public function run()
    {
        DB::table('newscategories')->delete();

        NewsCategoryModels::create([
            'category' => 'Event'
        ]);

        NewsCategoryModels::create([
            'category' => 'Club'
        ]);

    }
}
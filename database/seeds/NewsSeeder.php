<?php

use Illuminate\Database\Seeder;
use App\Models\NewsModels;
class NewsSeeder extends Seeder {

    public function run()
    {
        DB::table('news')->delete();

        NewsModels::create([
            'id_category' => 1,
            'title'=> 'Bazaar Motor Vintage Gasibu',
            'headline'=>'Bazaar Motor Vintage Ramaikan Gasibu',
            'content'=>'Bla bla bla bla',
            'author'=>'Asep Gorbacep'
        ]);
    }
}
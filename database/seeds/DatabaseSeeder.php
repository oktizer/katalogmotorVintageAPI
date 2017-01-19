<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InfoServisSeeder::class);
        $this->call(MotorCycleSeeder::class);
        $this->call(AccesoriesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(EventsSeeder::class);
        $this->call(NewsCategoriesSeeder::class);
        $this->call(NewsSeeder::class);
    }
}

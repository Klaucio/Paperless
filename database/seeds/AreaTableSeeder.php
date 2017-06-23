<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Area::class, 5)->create()->each(function ($area) {

            factory(App\Disciplina::class,5)->create(['area_id' => $area->id]);
        });
    }
}

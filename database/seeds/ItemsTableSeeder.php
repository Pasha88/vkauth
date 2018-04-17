<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();

        $items = array(
            array(
                'user_id' => '1',
                'name' => 'Задача №1',
                'done' => false
            ),
            array(
                'user_id' => '1',
                'name' => 'Задача №2',
                'done' => true
            )
        );

        DB::table('items')->insert($items);
    }
}

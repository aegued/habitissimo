<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = "SET FOREIGN_KEY_CHECKS=0";
        DB::connection()->getPdo()->exec($sql);
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            'name'          =>  'Pintores',
            'created_at'    =>  now()
        ]);
        DB::table('categories')->insert([
            'name'          =>  'Carpinteros',
            'created_at'    =>  now()
        ]);
        DB::table('categories')->insert([
            'name'          =>  'Reformas',
            'created_at'    =>  now()
        ]);
    }
}

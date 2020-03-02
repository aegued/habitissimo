<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriesSeeder extends Seeder
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
        DB::table('subcategories')->truncate();

        DB::table('subcategories')->insert([
            'category_id'   =>  1,
            'name'          =>  'Pintar Interior De Vivienda',
            'created_at'    =>  now()
        ]);
        DB::table('subcategories')->insert([
            'category_id'   =>  1,
            'name'          =>  'Otros Trabajos De Pintura',
            'created_at'    =>  now()
        ]);
        DB::table('subcategories')->insert([
            'category_id'   =>  1,
            'name'          =>  'Pintar Exterior Edificio',
            'created_at'    =>  now()
        ]);

        DB::table('subcategories')->insert([
            'category_id'   =>  2,
            'name'          =>  'Otros Trabajos De Carpintería De Madera',
            'created_at'    =>  now()
        ]);
        DB::table('subcategories')->insert([
            'category_id'   =>  2,
            'name'          =>  'Hacer Mueble a Medida',
            'created_at'    =>  now()
        ]);
        DB::table('subcategories')->insert([
            'category_id'   =>  2,
            'name'          =>  'Reparar Carpintería Madera',
            'created_at'    =>  now()
        ]);

        DB::table('subcategories')->insert([
            'category_id'   =>  3,
            'name'          =>  'Reforma Vivienda',
            'created_at'    =>  now()
        ]);
        DB::table('subcategories')->insert([
            'category_id'   =>  3,
            'name'          =>  'Reforma Parcial (menos De 3 Estancias)',
            'created_at'    =>  now()
        ]);
        DB::table('subcategories')->insert([
            'category_id'   =>  3,
            'name'          =>  'Proyecto y Reforma Vivienda',
            'created_at'    =>  now()
        ]);
    }
}

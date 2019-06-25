<?php

use Illuminate\Database\Seeder;

class tipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo__usuarios')->insert([
            'nombre'=>'AAA'

        ]);
    }
}

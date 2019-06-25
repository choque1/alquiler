<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolTableSeeder extends Seeder
{
    /**use Carbon\Carbon;
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'cliente',
            'empleado'
        ];
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}

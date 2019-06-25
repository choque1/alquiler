<?php

use Illuminate\Database\Seeder;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        DB::table('usuario')->insert([
            
        
            'usuario' =>'admin',
            'nombre' => 'Administrador',
            'password' => bcrypt('admin'),


        ]);

        
        DB::table('usuario_rol')->insert([

        ]);
    }
}

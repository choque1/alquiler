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
                DB::table('usuario')->insert([
                    'usuario' => 'admin',
                    'nombre' => 'cliente',
                    'password' => bcrypt('admin')
                ]);

                DB::table('usuario_rol')->insert([
                    'rol_id' => 1,
                    'usuario_id' => 1,
                    'estado' => 1
                ]);

                DB::table('usuario_rol')->insert([
                    'rol_id' => 2,
                    'usuario_id' => 2,
                    'estado' => 1
                ]);
        
    }
}

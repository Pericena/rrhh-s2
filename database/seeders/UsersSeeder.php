<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('12345'); //bcrypt encripta la contraseña
        $user->foto = 'https://firebasestorage.googleapis.com/v0/b/imagenes-972f4.appspot.com/o/usuario%2Ffcca5f38-d7f7-4bdd-b0f6-a1ba3e0420bf.jpg?alt=media&token=3402b043-3f5f-4b90-a768-fd870404b14f';
        $user->edad = 22;
        $user->sexo = 'Masculino';
        $user->cargo = 'Analista';
        $user->direccion = 'Av. Litoral  #341';
        $user->telefono = 6215215;
        /* $user->idempresa = 2; */
        $user->save(); //save con  parentesis
         //$user->assignRole('Analista');
    }
}

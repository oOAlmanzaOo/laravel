<?php

use Illuminate\Database\Seeder;

class add_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user =
        [

          'nombre'         => 'admin',
          'correo'         => 'admin@live.cl',
          'password'       => '1234',
          'remember_token' => Str::random(10),
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now()

          /*'nombre'         => 'admin',
          'correo'         => 'admin@live.cl',
          'password'       => encrypt('1234'),
          'remember_token' => Hash::make('secret'),
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now()*/

        ];

        DB::table('table_user')->insert($user);

    }
}

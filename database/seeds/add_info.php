<?php

use Illuminate\Database\Seeder;

class add_info extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $info =
        [

          'apellido'         => 'Almanza',
          'calle'         => 'call1',
          'telefono'       => '(521) 56 0000 0000',
          'created_at'     => \Carbon\Carbon::now(),
          'updated_at'     => \Carbon\Carbon::now()

        ];

        DB::table('table_info')->insert($info);

    }
}

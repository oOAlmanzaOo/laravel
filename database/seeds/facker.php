<?php

use Illuminate\Database\Seeder;

class facker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory('App\Entities\model_ejemplo_1', 10)->create();

    }
}

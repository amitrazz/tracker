<?php

use Illuminate\Database\Seeder;

class ApiTestTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ApiTest::class, 30)->create();
    }
}

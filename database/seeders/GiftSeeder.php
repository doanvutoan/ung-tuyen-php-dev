<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gifts')->insert([
            [
                'name' => 'Iphone',
                'qty' => 10,
            ],
            [
                'name' => 'Một triệu tiền mặt',
                'qty' => 30,
            ],
            [
                'name' => 'Vé xem phim',
                'qty' => 60,
            ],
        ]);
    }
}

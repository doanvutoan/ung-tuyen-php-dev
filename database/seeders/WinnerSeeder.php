<?php

namespace Database\Seeders;

use App\Models\Winner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WinnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')
            ->where('code', '>', 0)
            ->inRandomOrder()
            ->limit(100)
            ->get()
            ->each(function ($item) {
                Winner::create([
                    'code' => $item->code,
                    'gift_id' => 0,
                    'tick' => 0,
                    'branch' => $item->branch,
                ]);
            });
    }
}

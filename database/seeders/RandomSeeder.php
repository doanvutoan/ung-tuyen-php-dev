<?php

namespace Database\Seeders;

use App\Models\Gift;
use App\Models\Winner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RandomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Gift::get() as $gift) {
            //qua la iphone (id mac dinh = 1)
            if ($gift->id == 1) {
                for ($i = 0; $i < $gift->qty; $i++) {
                    //lay ngau nhien 1 nhan vien
                    $per = Winner::where('branch', '!=', 1)
                    ->where('tick', '=', 0)
                    ->inRandomOrder()
                    ->first();
                    //random tỉ lệ
                    $rand = rand(1, 210);
                    if ($rand > 100) {
                        //nhom cua hàng so 1
                        //lay ngau nhien 1 nguoi dung cua cua hang 1
                        $per = Winner::where('branch', '=', 1)
                        ->where('tick', '=', 0)
                        ->inRandomOrder()
                        ->first();
                    }    
                    //cap nhat cho nguoi dung da nhan qua
                    $per->gift_id = $gift->id;
                    $per->tick = 1;
                    $per->save();
                }
            } else {
                //quà còn lại tỉ lệ bằng nhau
                for ($i = 0; $i < $gift->qty; $i++) {
                    Winner::where('tick', '=', 0)
                        ->inRandomOrder()
                        ->first()->update([
                            'gift_id' => $gift->id,
                            'tick' => 1,
                        ]);
                }
            }
        }
    }
}

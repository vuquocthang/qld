<?php

use Illuminate\Database\Seeder;

class LopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Lop::insert([
            ['malop' => 'SPT1', 'tenlopvt' => 'Sư phạm Tin 1','tenlop'=>'Công nghệ thông tin','khoa_id'=>'1'],
            ['malop' => 'SPT2', 'tenlopvt' => 'Sư phạm Tin 2','tenlop'=>'Công nghệ thông tin','khoa_id'=>'1'],
            ['malop' => 'CNTT1', 'tenlopvt' => 'Công nghệ thông tin 1','tenlop'=>'Công nghệ thông tin','khoa_id'=>'1'],
            ['malop' => 'CNTT2', 'tenlopvt' => 'Công nghệ thông tin 2','tenlop'=>'Toán Tin','khoa_id'=>'2'],

        ]);
    }
}

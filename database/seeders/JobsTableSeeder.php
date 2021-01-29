<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = ['job' => 'ボーカル'];
        DB::table('jobs')->insert($param);

        $param = ['job' => 'ギター'];
        DB::table('jobs')->insert($param);

        $param = ['job' => '鍵盤'];
        DB::table('jobs')->insert($param);

        $param = ['job' => 'ベース'];
        DB::table('jobs')->insert($param);

        $param = ['job' => 'ドラム'];
        DB::table('jobs')->insert($param);

        $param = ['job' => '管楽器'];
        DB::table('jobs')->insert($param);

        $param = ['job' => '弦楽器'];
        DB::table('jobs')->insert($param);

        $param = ['job' => '打楽器'];
        DB::table('jobs')->insert($param);

        $param = ['job' => 'その他楽器'];
        DB::table('jobs')->insert($param);

        // $param = ['job' => ''];
        // DB::table('jobs')->insert($param);

        $param = ['job' => 'イラストレーター'];
        DB::table('jobs')->insert($param);

        $param = ['job' => 'カメラマン'];
        DB::table('jobs')->insert($param);

        $param = ['job' => '映像クリエイター'];
        DB::table('jobs')->insert($param);

        $param = ['job' => '音響クリエイター'];
        DB::table('jobs')->insert($param);
    }
}

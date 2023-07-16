<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++){
            DB::table('news')->insert(
                [
                    'title'=> 'title'.$i,
                    'created_at'=>now(),
                    'text'=>'text'.$i,
                    'image'=>$i.'jpg',
                ]
                );
    }
}
}

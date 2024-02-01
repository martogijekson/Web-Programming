<?php

use Illuminate\Database\Seeder;
use DB;

class mahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tb_mahasiswa')->insert([
           'nim'=>'2105541054',
           'nama'=>'Martogi Jekson',
           'jurusan'=> 'TEKNIK-ELEKTRO'
        ]);
    }
}

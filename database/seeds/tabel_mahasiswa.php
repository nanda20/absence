<?php

use Illuminate\Database\Seeder;

class tabel_mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->delete();
        $data=[

        ];
        DB::table('mahasiswa')->insert($data);
    }
}

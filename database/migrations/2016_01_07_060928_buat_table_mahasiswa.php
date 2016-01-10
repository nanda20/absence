<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {

        Schema::create('mahasiswa',function (Blueprint $table) {
            $table->integer('nip');
            $table->String('nama',30);
            $table->String('jk',10);
            $table->String('ttl',50);
            $table->String('alamat',50);
            $table->integer('jurusan_id');
            $table->integer('tingkat');
            $table->timestamps();

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mahasiswa');
    }
}

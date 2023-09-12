<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function (Blueprint $table){
            $table->string('email', 50)->after('id_mahasiswa')->nullable();
            $table->string('alamat', 50);
            $table->string('tgl_lahir', 12);
        });             
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function (Blueprint $table){
            $table->dropColumn('email');
            $table->dropColumn('alamat');
            $table->dropColumn('tgl_lahir');
        });   
    }
}

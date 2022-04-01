<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomEmailAlamatTanggalLahir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswas', function(Blueprint $table){
            $table->string('Email', 255)->after('No_Handphone');
            $table->string('Alamat',255)->after('Email');
            $table->date('TanggalLahir')->after('Alamat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswas', function(Blueprint $table){
            $table->dropColumn('Email');
            $table->dropColumn('Alamat');
            $table->dropColumn('TanggalLahir');
        });
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSdh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdh_kawasan_hutan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('tahun');
            $table->string('luas');
            $table->string('suaka_alam');
            $table->string('lindung');
            $table->string('produksi_terbatas');
            $table->string('produksi_tetap');
            $table->string('produksi_konservasi');
            $table->string('jumlah_luas');
            $table->string('persentase');
            $table->softDeletes('delete_at');
            $table->timestamps();
        });
        Schema::create('sdh_lahan_vegetasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('tahun');
            $table->string('lahan_kering_primer');
            $table->string('lahan_kering_sekunder');
            $table->string('hutan_rawa_primer');
            $table->string('hutan_rawa_sekunder');
            $table->string('hutan_mangrove_primer');
            $table->string('hutan_mangrove_sekunder');
            $table->string('semak_belukar');
            $table->string('semak_belukar_rawa');
            $table->string('savana');
            $table->string('hti');
            $table->string('perkebunan');
            $table->string('pertanian');
            $table->softDeletes('delete_at');
            $table->timestamps();
        });
        Schema::create('sdh_sebaran_kawasan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('tahun');
            $table->string('taman_nasional_jumlah');
            $table->string('taman_nasional_luas');
            $table->string('taman_wisata_jumlah');
            $table->string('taman_wisata_luas');
            $table->string('taman_buru');
            $table->string('cagar_alam_jumlah');
            $table->string('cagar_alam_luas');
            $table->string('suaka_margasatwa_jumlah');
            $table->string('suaka_margasatwa_luas');
            $table->string('taman_hutan_jumlah');
            $table->string('taman_hutan_luas');
            $table->string('total_luas');
            $table->text('keterangan');
            $table->softDeletes('delete_at');
            $table->timestamps();
        });
        Schema::create('sdh_penataan_batas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('tahun');
            $table->string('fungsi');
            $table->string('luar');
            $table->string('jumlah');
            $table->softDeletes('delete_at');
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
        Schema::drop('sdh_kawasan_hutan');
        Schema::drop('sdh_lahan_vegetasi');
        Schema::drop('sdh_sebaran_kawasan');
        Schema::drop('sdh_penataan_batas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worships', function (Blueprint $table) {
            $table->id();
            $table->integer('nuru_moja_wakulima');
            $table->integer('akili_moja_wafugaji');
            $table->integer('thamani_moja_biashara');
            $table->integer('moyo_mmoja_madini');
            $table->integer('hatma_moja_wanafunzi');
            $table->integer('kustareheshwa_makuhani');
            $table->integer('kila_lango_waimbaji');
            $table->text('habari_njema_za_uzao_wa_mungu_baba');
            $table->foreignId('attendance_id')->constrained();
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
        Schema::dropIfExists('worships');
    }
}

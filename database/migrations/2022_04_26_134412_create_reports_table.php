<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('report_code')->unique();
            $table->boolean('majira_wiki_ya');
            $table->integer('vichwa');
            $table->integer('makanisa');
            $table->integer('uzao');
            $table->integer('waumini_jumla');
            $table->integer('matunda_ya_mungu_baba');
            $table->integer('matunda_ya_shukrani');
            $table->integer('matunda_ya_jamii');
            $table->integer('limbuko');
            $table->integer('mradi');
            $table->integer('matumizi');
            $table->integer('salio');
            $table->foreignId('priest_id')->constrained();
            $table->foreignId('station_id')->constrained();
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
        Schema::dropIfExists('reports');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('records_code')->unique();
            $table->boolean('aina_ya_ripoti');
            $table->string('kituo');
            $table->integer('zaka_jumla');
            $table->integer('matunda_ya_shukrani_jumla');
            $table->integer('limbuko_jumla');
            $table->integer('matunda_ya_jamii_jumla');
            $table->integer('mapato_jumla');
            $table->integer('matumizi_jumla');
            $table->integer('salio');
            $table->string('jina_la_kuhani');
            $table->foreignId('monitor_id')->constrained();
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
        Schema::dropIfExists('records');
    }
}

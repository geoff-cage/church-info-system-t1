<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('mapato_code')->unique();
            $table->integer('matunda_ya_chanzo_halisi');
            $table->integer('matunda_ya_shukrani');
            $table->integer('limbuko');
            $table->integer('matunda_ya_chanzo_jamii');
            $table->integer('jumla');
            $table->integer('salio_lililokuwepo');
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
        Schema::dropIfExists('expenses');
    }
}

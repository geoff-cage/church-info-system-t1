<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('mahudhurio_code')->unique();
            $table->string('majira_ya_kanisa');
            $table->string('sauti_ya_chanzo_halisi_iliyofundishwa');
            $table->integer('vichwa');
            $table->integer('kanisa');
            $table->integer('uzao');
            $table->integer('jumla');
            $table->foreignId('station_id')->constrained();
            $table->foreignId('priest_id')->constrained();
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
        Schema::dropIfExists('attendances');
    }
}

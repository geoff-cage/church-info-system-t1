<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->string('kituo_code')->unique();
            $table->string('jina_la_kituo');

            $table->foreignId('church_id')->constrained('churches');
            $table->foreignId('region_id')->constrained('regions'); 
            $table->timestamps();
            

          /*  $table->unsignedBigInteger('kanisa_id');
             $table->foreign('kanisa_id')->references('kanisa_id')->on('churches'); **/

           /*  $table->unsignedBigInteger('mkoa_id');
            $table->foreign('mkoa_id')->references('mkoa_id')->on('regions'); */

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stations');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpdrachtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opdrachten', function (Blueprint $table) {
            $table->increments('opdracht_id');
            $table->timestamps('leerling_id');
            $table->timestamps('titel');
            $table->timestamps('type');
            $table->timestamps('beschrijving');
            $table->timestamps('status');
            $table->timestamps('deadline');
            $table->timestamps('individueelofgroepsopdracht');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opdrachten');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione di partenza', 30);
            $table->string('stazione di arrivo', 30);
            $table->dateTime('orario di partenza');
            $table->dateTime('orario di arrivo');
            $table->mediumInteger('codice_treno')->unique();
            $table->tinyInteger('numero_carrozze')->nullable();
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {

            $table->id();

            //azienda
            $table->string('company')->nullable();
            //staztione di partenza
            $table->string('departure_station');
            //staztione di arrivo
            $table->string('arrival_station');
            //orario di partenza
            $table->dateTime('departure_time');
            //orario di arrivo
            $table->dateTime('arrival_time');
            //codice treno
            $table->tinyInteger('train_code')->unsigned();
            //numero carrozze
            $table->tinyInteger('carriages')->nullable()->unsigned();
            //in orario
            $table->boolean('delay')->default(0);
            //cancellato
            $table->boolean('canceled')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};

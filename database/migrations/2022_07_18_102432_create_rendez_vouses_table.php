<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->date('dateRv');
            $table->date('dateReservation');
            $table->string('motifConsultation');
            $table->boolean('status');
            $table->boolean('paye');
            $table->foreignId('medecin_id')->constrained();
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('proche_id')->nullable()->constrained();
            $table->foreignId('tarif_id')->constrained();
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
        Schema::dropIfExists('rendez_vouses');
    }
};

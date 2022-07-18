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
        Schema::create('medecins', function (Blueprint $table) {
            $table->id();
            $table->string('dr_nom');
            $table->string('dr_prenom');
            $table->enum('dr_genre',['Homme', 'Femme']);
            $table->date('dr_dateNaissance');
            $table->string('dr_telephone')->unique();
            $table->string('dr_login')->unique();
            $table->string('dr_password');
            $table->string('jourService');
            $table->time('heureDebut');
            $table->time('heureDecente');
            $table->string('profil_image')->nullable();
            $table->boolean('disponibilite');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('medecins');
    }
};

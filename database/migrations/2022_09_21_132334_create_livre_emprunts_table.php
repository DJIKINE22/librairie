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
        Schema::create('livre_emprunts', function (Blueprint $table) {
            $table->id();
            $table->date('date_emprunt');
            $table->date('dateRetour_emprunt');
            $table->date('nbreLivre_emprunt');
            $table->unsignedBigInteger('id_abo');
            $table->foreign('id_abo')->references('id')->on('abonnées')->onDelete('cascade');
            $table->unsignedBigInteger('id_livre');
            $table->foreign('id_livre')->references('id')->on('livres')->onDelete('cascade');
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
        Schema::dropIfExists('livre_emprunts');
    }
};

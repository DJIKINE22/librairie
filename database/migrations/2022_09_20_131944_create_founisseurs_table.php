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
        Schema::create('founisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_four');
            $table->string('prenom_four');
            $table->string('adresse_four');
            $table->string('telephone_four')->unique();
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
        Schema::dropIfExists('founisseurs');
    }
};

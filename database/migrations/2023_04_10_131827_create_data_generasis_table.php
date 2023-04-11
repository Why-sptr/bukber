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
        Schema::create('data_generasis', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nama');
            $table->enum('generasi',['Generasi 1','Generasi 2','Generasi 3','Generasi 4','Generasi 5','Generasi 6','Generasi 7','Generasi 8','Generasi 9','Generasi 10','Generasi 11','Generasi 12']);
            $table->enum('metode_pembayaran',['COD','Transfer']);
            $table->string('penerima');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_generasis');
    }
};

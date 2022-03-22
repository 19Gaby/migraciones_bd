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
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_provedor');
            $table->foreign('id_provedor')->references('id')->on('provedor')->onDelete('cascade');
            $table->string('marcas', 10);
            $table->string('cant_harina', 10);
            $table->string('cant_leche', 10);
            $table->string('cant_agua', 10);
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
        Schema::dropIfExists('ingredientes');
    }
};

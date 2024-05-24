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
        Schema::create('profesors', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('address');
            $table->integer('dni');
            $table->integer('phone');
            $table->unsignedBigInteger('modulo_id')->nullable();
            $table->foreign('modulo_id')
                  ->references('id')
                  ->on('modulos')
                  ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesors');
    }
};

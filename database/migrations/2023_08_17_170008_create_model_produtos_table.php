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
        Schema::create('model_produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80)->nullable(false);
            $table->number('codigo', 30)->unique()->nullable(false);
            $table->number('preço', 10)->nullable(false);
            $table->string('tipo', 50)->unique()->nullable(false);
            $table->string('linha', 50)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_produtos');
    }
};

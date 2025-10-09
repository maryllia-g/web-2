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
        Schema::create('pontos_turisticos', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); 
            $table->string('cidade'); 
            $table->string('estado'); 
            $table->text('descricao')->nullable(); 
            $table->string('imagem')->nullable(); //aprendendo a trabalahar com upload de imagens
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pontos_turisticos');
    }
};

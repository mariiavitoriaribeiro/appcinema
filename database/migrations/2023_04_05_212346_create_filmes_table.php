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
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomefilme');
            $table->string('generofilme');
            $table->string('notafilme');
            $table->string('atoresfilme');
            $table->string('diretorfilme');
            $table->string('distribuidorafilme');
            $table->string('duracaofilme');
            $table->string('dtlancamentofilme');
            $table->longText('sinopsefilme');
            $table->string('capa');
            $table->string('capahero');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes');
    }
};
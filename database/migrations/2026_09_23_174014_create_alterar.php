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
        Schema::create('alterar', function (Blueprint $table) {
                 $table->id();
            $table->string('solicitação_alterar');
             $table->string('alterados');
              $table->integer('quantidade_alterada');
              $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alterar');
    }
};

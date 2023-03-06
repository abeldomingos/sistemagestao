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

        //nome - ok
        //preco - ok
        //estoque - ok

        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); //varchar 255
            $table->decimal('preco'); //decimal
            $table->integer('estoque'); //int
            $table->timestamps(); //creat_at e update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};

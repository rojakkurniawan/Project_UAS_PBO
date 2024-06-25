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
        Schema::create('uniq_product', function (Blueprint $table) {
            $table->id('id_product');
            $table->string('judul_1', 255);
            $table->string('judul_2', 255);
            $table->string('judul_3', 255);
            $table->string('judul_4', 255);
            $table->string('judul_5', 255);
            $table->string('judul_6', 255);
            $table->longText('desc_1');
            $table->longText('desc_2');
            $table->longText('desc_3');
            $table->longText('desc_4');
            $table->longText('desc_5');
            $table->longText('desc_6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uniq_product');
    }
};
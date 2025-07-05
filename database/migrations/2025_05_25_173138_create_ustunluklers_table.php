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
        Schema::create('ustunluklers', function (Blueprint $table) {
            $table->id();
            $table->text('content_en')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_tm');
            $table->text('images')->nullable();
            $table->text('files')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ustunluklers');
    }
};

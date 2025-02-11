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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('speciality_id')->onDelete('cascade');
            $table->foreignId("user_id")->onDelete('cascade');
            $table->string('ar_name');
            $table->string('en_name');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->boolean('is_active')->default(true);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};

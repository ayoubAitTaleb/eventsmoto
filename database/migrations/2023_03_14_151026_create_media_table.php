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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name');
            $table->string('media_name');
            $table->string('email')->unique();
            $table->integer('indicatif');
            $table->integer('phone');
            $table->string('social_reason');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->text('description')->nullable();
            $table->string('logo');
            $table->string('card_front');
            $table->string('card_back');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};

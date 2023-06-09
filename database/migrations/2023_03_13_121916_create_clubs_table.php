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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name');
            $table->string('club_name');
            $table->string('email')->unique();
            $table->integer('indicatif');
            $table->integer('phone');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->text('description')->nullable();
            $table->string('logo');
            $table->string('rec_def');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};

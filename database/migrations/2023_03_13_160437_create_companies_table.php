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
        Schema::create('companies', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('commercial_name');
            $table->string('company_name');
            $table->string('email');
            $table->string('phone');
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->text('description');
            $table->integer('patente');
            $table->bigInteger('registre_commerce');
            $table->bigInteger('identifiant_fiscal');
            $table->bigInteger('ice');
            $table->bigInteger('cnss');
            $table->string('logo');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};

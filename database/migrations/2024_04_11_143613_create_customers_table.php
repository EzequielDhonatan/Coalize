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
        Schema::create('customers', function (Blueprint $table) {

            // Data Customer
            $table->uuid('id')->primary();

            $table->string('name');
            $table->string('cpf');
            $table->string('photo');
            $table->string('gender');

            // Address
            $table->string('zip_code');
            $table->string('address');
            $table->integer('number');
            $table->string('complement');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

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
        Schema::create('products', function (Blueprint $table) {

            // Data Product
            $table->uuid('id')->primary();

            $table->foreignUuid('customer_id')->constrained('customers')->onUpdate('cascade')->onDelete('cascade');

            $table->string('name');
            $table->double('price', 8, 2);
            $table->string('photo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

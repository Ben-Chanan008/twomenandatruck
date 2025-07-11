<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->references('id')->on('services')->cascadeOnDelete();
            $table->string('details');
            $table->string('description')->nullable();
            $table->decimal('price');
            $table->enum('currency', ['cad', 'usd', 'euros', 'pounds']);
            $table->boolean('is_active')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_details');
    }
};

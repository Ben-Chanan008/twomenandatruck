<?php

use App\Models\Service;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Service::class)->constrained()->cascadeOnDelete();
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
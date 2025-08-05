<?php

use App\Models\Quote;
use App\Models\ServicesDetail;
use App\Models\UserRole;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Quote::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(ServicesDetail::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_services');
    }
};
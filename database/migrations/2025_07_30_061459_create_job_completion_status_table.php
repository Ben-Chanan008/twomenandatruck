<?php

use App\Models\JobSchedule;
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
        Schema::create('job_completion_status', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(JobSchedule::class)->constrained()->cascadeOnDelete();
            $table->boolean('is_completed');
            $table->enum('job_status', ['completed', 'assigned', 'pending']);
            $table->string('icon')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_completion_status');
    }
};
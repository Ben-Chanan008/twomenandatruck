<?php

namespace App\Jobs;

use Throwable;
use App\Mail\AssignedWork;
use App\Models\JobSchedule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyWorker implements ShouldQueue
{
    use Queueable;

    protected $tries = 3;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public JobSchedule $jobSchedule,
    )
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
        // dd($this->jobSchedule);
        foreach($this->jobSchedule->users() as $workers)
            Mail::to($workers->email)
                ->send(new AssignedWork($this->jobSchedule));
    }

    public function failed(?Throwable $exception): void
    {
        Log::info($exception->getMessage());
    }
}
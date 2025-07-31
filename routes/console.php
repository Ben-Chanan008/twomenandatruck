<?php

use App\Mail\WorkerMaintenanceSuccess;
use App\Models\UserRole;
use App\Models\JobSchedule;
use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schedule;

/* Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->everyFiveSeconds(); */


class WorkerMaintenance {
    CONST ICONS = ['pending' => 'clock', 'assigned' => 'pen', 'completed' => 'check'];

    public function __invoke()
    {
        //TODO: Change column name to job_assigned, and check if job is not complete
        $assignedJobs = JobSchedule::where(['job_completed' => 1])
                        ->doesNotHave('jobStatus')
                        ->with('users')
                        ->get();
                        
        if(!$assignedJobs->isEmpty())                        
            foreach($assignedJobs as $job){
                $start_time = $job->start_time;
                $end_time = $job->end_time;

                if(now() >= $end_time){
                    if($job->jobStatus()->create([
                        'is_completed' => 1,
                        'job_status' => 'completed',
                        'icon' => $this::ICONS['completed']
                    ])){
                        UserRole::where(['user_id' => $job->users()->first()->id])
                            ->update([
                                'user_status' => 'active'
                            ]);
                            
                        Mail::to('bchanan.boss@gmail.com')->send(
                            new WorkerMaintenanceSuccess()
                        );    
                        Log::info('Worker Maintenance completed!');
                    }
                }
            }

        Log::info('Worker Maintenance not needed!');
    }
}

Schedule::call(new WorkerMaintenance)->dailyAt('00:00');
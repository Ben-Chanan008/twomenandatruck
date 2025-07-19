<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use App\Models\AssignJob;
use App\Mail\AssignedWork;
use App\Models\JobSchedule;
use Illuminate\Http\Request;
use App\Models\AssignJobWorker;
use Illuminate\Support\Facades\Mail;

class AssignJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $color_codes = [
            'active' => 'text-green-400',
            'probation' => 'text-orange-400'
        ];

        $available_jobs = JobSchedule::where(['job_completed' => false])->get();
        $completed_jobs = JobSchedule::where(['job_completed' => true])->get();

        return view('assign-jobs', [
            'employees' => $this->getEmployees(),
            'color_codes' => $color_codes,
            'available_jobs' => $available_jobs,
            'completed_jobs' => $completed_jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $job_id = $request->query()['job_id'];

        $job = JobSchedule::where(['id' => $job_id])->first();

        // dd($job->quote->services[0]);

        return view('assign-jobs-final', [
            'job'=> $job,
            'workers' => $this->getEmployees(),
            'services' => $job->quote->services
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validateChecks($request, 'workers_', function ($ids) {
            $job_id = request()->query()['job'];

            $data = [];
            $job = JobSchedule::where(['id' => $job_id])->first();

            foreach($ids as $id){
                /* Uncomment if it fits logical requirements; */
                // if(!$job->users()->where(['user_id' => 4])->exists())
                $data[] = ['job_schedule_id' => $job_id, 'user_id' => $id];
            }

            if ($job->users()->sync($data)){
                $setToWork = UserRole::whereIn('user_id', $ids)
                        ->update(['user_status' => 'working']);
                if ($setToWork){
                    if($job->update(['job_completed' => true])){
                        Mail::to($job->users->email)->queue(
                            new AssignedWork(($job))
                        );
                        return redirect()->route('assign-jobs.index')->with('showPopup', ['type' => 'success', 'message' => 'Assigned workers successfully']);
                    }
                }
            }
        });        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function getEmployees()
    {
        $role_id = Role::where(['role' => 'employee'])->first()->id;
        $employee_ids = UserRole::where(['role_id' => $role_id])
            ->whereNot(fn ($query) => $query->where(['user_status' => 'fired'])->orWhere(['user_status' => 'working']))
            ->pluck('user_id');
        
        $employees = User::whereIn('id', $employee_ids)->with('roles')->get();
        return $employees;
    }

    private function validateChecks(Request $request, string $alias, $callback)
    {
        $checks_ids = [];

        foreach($request->all() as $key => $resolved){
            if(str_starts_with($key, $alias)){
                $checks_ids[] = $resolved;
            }
        }

        if(empty($checks_ids)){
            return back()->withErrors([
                'errors' => 'No service detail was checked! Please check at least one'
            ])->onlyInput('errors');
        }

        $callback($checks_ids);
    }
}
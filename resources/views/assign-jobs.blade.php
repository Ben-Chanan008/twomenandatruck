@php
    use Illuminate\Support\Carbon;
@endphp
<x-base-struct page="Assign Jobs">
    <x-popup />
    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <style>
            .word-wrap{
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
                width: 200px;
            }
        </style>
    @endpush
    <x-dashboard-navbar>
        <p class="text-3xl p-8">Assign Jobs</p>
        <section class="grid grid-cols-3 items-start gap-4 h-[90vh] mb-4">
            <div class="p-8 space-y-8 overflow-y-auto h-full">
                <p class="text-xl font-semibold">Requested Jobs</p>
                @unless ($available_jobs->isEmpty())
                    @foreach ($available_jobs as $job)
                        <div class="border-b border-b-gray-400 hover:bg-gray-300 hover:cursor-pointer transition-colors duration-300">
                            <div class="flex items-center m-2 gap-4">
                                <p class="px-2 rounded-sm text-xs text-gold font-semibold bg-gray-200">Client:</p>
                                <p class="font-semibold">
                                    {{ $job->quote->user->first_name }} {{ $job->quote->user->last_name }}
                                </p>
                            </div>
                            <div class="flex items-center m-2 gap-4">
                                <p class="px-2 rounded-sm text-gold text-xs font-semibold bg-gray-200">Requested for:</p>
                                <p class="font-semibold">{{ Carbon::parse($job->booked_for)->format('jS M Y, gA') }}</p>
                            </div>
                            <div class="flex items-center m-2 gap-4">
                                <p class="px-2 rounded-sm text-gold text-xs font-semibold bg-gray-200">Initial Deposit:</p>
                                <p class="font-semibold text-green-400">$CAD {{ $job->initial_deposit }}</p>
                            </div>
                            <a href="{{ url("app/admin/assign-jobs/create?job_id={$job->id}") }}" class="text-center w-[90%] block bg-black text-white mx-auto p-2 rounded-lg my-2">Assign Job</a>
                        </div>
                    @endforeach
                    @else
                        <p class="text-sm text-center text-red-600 font-bold">No available jobs</p>
                @endunless
            </div>
            <div class="wrapper p-8 space-y-8">
                <p class="text-xl font-semibold">Day Availaibilty</p>
                <div type="text" id="calendar" class="px-8"></div>
            </div>
            <div class="p-8 space-y-8">
                <p class="text-xl font-semibold text-center">Worker Availability</p>
                @forelse ($employees as $employee)
                    <div class="bg-gray-200 p-4 justify-between flex gap-4 rounded-md items-center">
                        <div class="flex gap-3">
                            <img src="https://placehold.co/42x42" alt="" class="rounded-md" />
                            <div class="flex flex-col">
                                <span class="{{ $color_codes[$employee->roles->first()->getOriginal('pivot_user_status')] ?? '' }} text-xs font-bold">
                                    {{ Str::title($employee->roles->first()->getOriginal('pivot_user_status')) }}
                                </span>
                                <p class="font-semibold ">{{ $employee->first_name }} {{ $employee->last_name }}</p> 
                            </div>
                        </div>
                        <div class="m-3 h-2 w-2 rounded-full bg-green-400 mb-1 shadow-xl animate-glow"></div>
                    </div>
                    @empty
                        <p class="text-sm text-center font-bold text-red-600">No workers are available</p>
                @endforelse
            </div>
        </section>
    </x-dashboard-navbar>
    {{-- {{ dd($available_jobs->get('booked_for')) }} --}}
    <script>
        const fp = flatpickr("#calendar", {
            inline: true,
            // "plugins": [new confirmDatePlugin({})],
            clickOpens: false,
            defaultDate: "2025-07-15", // Optional: pre-select a date
            // enable: [
            //     (date) => {
            //         return date.getDay() === 1 || date.getDay() === 5;
            //     }
            // ],
            // disable:"",
            minDate: 'today'
        });
    </script>
</x-base-struct>
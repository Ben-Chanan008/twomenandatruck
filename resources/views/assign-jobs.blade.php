<x-base-struct>
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
        <section class="grid grid-cols-2 gap-4">
            <div class="wrapper p-8 space-y-8">
                <p class="text-xl font-semibold mb-3">Day Availaibilty</p>
                <div type="text" id="calendar" class="px-8"></div>
            </div>
            <div class="p-8 space-y-4">
                <p class="text-xl font-semibold mb-4">Worker Availability</p>
                @forelse ($employees as $employee)
                    <div class="bg-gray-200 p-4 flex gap-4 rounded-md items-center">
                        <img src="https://placehold.co/42x42" alt="" />
                        <div class="flex flex-col">
                            <span class="{{ $color_codes[$employee->roles->first()->getOriginal('pivot_user_status')] ?? '' }} text-xs font-bold">
                                {{ Str::title($employee->roles->first()->getOriginal('pivot_user_status')) }}
                            </span>
                            <p class="font-semibold ">{{ $employee->first_name }} {{ $employee->last_name }}</p> 
                        </div>
                        <div class="h-2 w-2 rounded-full mx-auto bg-green-400 self-end mb-1 shadow-xl animate-glow"></div>
                    </div>
                    @empty
                        <p class="text-sm text-center font-bold text-red-600">No workers are available</p>
                @endforelse
            </div>
        </section>
    </x-dashboard-navbar>

    <script>
        flatpickr("#calendar", {
            inline: true,
            clickOpens: false,
            defaultDate: "2025-07-15", // Optional: pre-select a date
            // enable: [
            //     (date) => {
            //         return date.getDay() === 1 || date.getDay() === 5;
            //     }
            // ],
            disable: ["2025-07-17"],
            minDate: 'today'
        });
    </script>
</x-base-struct>
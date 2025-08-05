@php
    use Illuminate\Support\Carbon;
@endphp
<x-base-struct page="Assign A Job">
    <x-dashboard-navbar>
            <section class="p-8">
                <p class="text-xl mb-4 font-bold">Current Job</p>
                <div class="border-2 border-gray-200 rounded-md w-fit hover:cursor-pointer transition-colors duration-300">
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
                        <p class="font-semibold">$CAD {{ $job->initial_deposit }}</p>
                    </div>
                </div>
            </section>
            <form action="{{ route('assign-jobs.store', ['job' => $job->id]) }}" method="POST">
                @csrf
                <input type="text" class="hidden" name="errors" />
                <section class="p-8">
                    <p class="text-xl font-bold">Services</p>
                    @forelse ($services as $key => $service)
                        <div class="p-3 space-x-1">
                            <input id="{{ $key }}" style="accent-color: var(--bg-tertiary)" type="checkbox" name="service_{{ $key + 1 }}" value="{{ $service->id }}" checked/>
                            <label for="{{ $key }}" class="font-semibold">{{ Str::title($service->details) }}</label>
                        </div>
                    @endforeach
                </section>
                <section class="p-8">
                    <p class="text-xl font-bold mb-4">Available Workers</p>
                    <div>
                        @forelse ($workers as $key => $worker)
                            <div class="w-1/4 mb-4">
                                <!-- Checkbox must come before and be a sibling to the items you're toggling -->
                                <input
                                    id="workers_{{ $key }}"
                                    style="accent-color: var(--bg-tertiary)"
                                    type="checkbox"
                                    name="workers_{{ $key + 1 }}"
                                    value="{{ $worker->id }}"
                                    class="hidden checkbox"
                                />

                                <label for="workers_{{ $key }}" class="check hover:cursor-pointer">
                                    <div class="flex items-center gap-3 bg-gray-200 rounded-md p-2 border-b-2 justify-between">
                                        <div class="flex gap-2 items-center">
                                            <img src="https://placehold.co/42x42" alt="" />
                                            <span class="font-normal">{{ $worker->first_name }}, {{ $worker->last_name }}</span>
                                        </div>
                                        <i class="far fa-circle"></i>
                                        <i class="fas fa-circle-check text-gold"></i>
                                    </div>
                                </label>
                            </div>
                            @empty
                                <p class="text-red-600 font-bold text-center">No available workers</p>
                        @endforelse
                    </div>
                </section>
                @unless ($workers->isEmpty())
                    <button class="text-center w-[90%] block bg-black text-white mx-auto p-2 rounded-lg my-2">Assign Job</button>
                @endunless
            </form>
    </x-dashboard-navbar>
</x-base-struct>

<x-base-struct page="Users">
    <x-dashboard-navbar> 
        <section class="p-8 flex justify-between">
            <p class="text-3xl">Users</p>
            <a href="{{ route('admin-users.create') }}" class="flex items-center bg-gold font-bold px-3 rounded-md">
                <i class="far fa-plus mr-2"></i> 
                <span>Add User</span>
            </a>
        </section>
        <p class="mx-8 mb-2 font-semibold"><i class="far fa-user-circle mr-2 text-gold"></i>All Users</p>
        <section class="space-y-4 mx-8 p-4">
            @forelse ($users as $user)
                <div class="grid grid-cols-3/1 gap-4">
                    <div class="bg-gray-200 p-4 justify-between flex gap-4 rounded-md items-center">
                        <div class="flex gap-3">
                            <img src="https://placehold.co/42x42" alt="" class="rounded-md" />
                            <div class="flex flex-col gap-1">
                                <div class="font-bold text-xs flex gap-3 items-center">
                                    <span class="{{ $color_codes[$user?->roles?->first()?->getOriginal('pivot_user_status')] ?? 'text-red-600' }}">
                                        {{ Str::title($user?->roles?->first()?->getOriginal('pivot_user_status') ?? 'invalid')}}
                                    </span>
                                    <div class="h-1 w-1 bg-gold rounded-full"></div>
                                    <span class="text-blue-400 ">{{ Str::title($user?->roles?->first()?->role)}}</span>
                                </div>

                                <p class="font-semibold ">{{ $user->first_name }} {{ $user->last_name }}</p>
                            </div>
                        </div>
                        <div class="m-3 h-2 w-2 rounded-full bg-green-400 mb-1 shadow-xl animate-glow"></div>
                    </div>
                    <div class="rounded-md p-4 bg-gray-200 flex justify-between items-center">
                        <a href="#">
                            <i class="far fa-pencil text-gold"></i>
                        </a>
                        <a href="#">
                            <i class="far fa-trash text-red-600"></i>
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-sm text-center font-bold text-red-600">No users exist yet!</p>
            @endforelse
            {{ $users->links() }}
        </section>

    </x-dashboard-navbar>
</x-base-struct>

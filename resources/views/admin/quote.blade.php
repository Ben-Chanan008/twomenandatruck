<x-base-struct page="Quotes Admin">
    <x-dashboard-navbar>
        <p class="mt-8 p-8 text-2xl">Quotes</p>
        @unless ($quotes->isEmpty())            
            <div class="relative overflow-x-auto px-8">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">User</th>
                            <th scope="col" class="px-6 py-3">
                                Quotes
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Quote Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quotes as $quote)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <i class="far fa-user-circle mr-3"></i>
                                    {{ $quote->user->first_name}}
                                    {{ $quote->user->last_name}}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $quote->quote_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $quote->quote_number }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ getCurrencySymbol('usd', $quote->price_total) }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p class="text-red-500 text-xl font-semibold">No quotes yet</p>
        @endunless
        <section class="mt-16">
            <p class="text-2xl p-8">Quotes Total</p>
            <div class="bg-gold rounded-lg m-6 p-5 w-1/2">
                <i class="far fa-user-circle"></i> All Users
                <p class="mt-6 text-3xl font-semibold">$2,000,000.00</p>
            </div>
        </section>
    </x-dashboard-navbar>
</x-base-struct>
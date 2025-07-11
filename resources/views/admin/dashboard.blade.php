<x-base-struct>
    <x-popup />
    <x-dashboard-navbar>
        <div class="p-4 h-full overflow-y-auto">
            <section class="w-full flex justify-between">
                <button>
                    <i class="far fa-search"></i>
                </button>
                <div class="flex gap-4">
                    <i class="far fa-fingerprint text-green-400"></i>
                    <div class="rounded-full bg-gray-300">
                        <img src="{{ asset('images/user.png') }}" class="w-[30px]" />
                    </div>
                </div>
            </section>
            <p class="mt-8 font-semibold text-xl">TMAAT Dashboard</p>
            <section class="grid grid-cols-3 gap-4 mt-8">
                <div class="p-8 bg-gold rounded-md">
                    <i class="far fa-user-visor"></i> 
                    <p class="inline mx-2">Total Clients</p>
                    <p class="text-3xl mt-4 font-bold">200</p>
                </div>
                <div class="p-8 bg-black  text-white rounded-md">
                    <i class="far fa-user-visor"></i> 
                    <p class="inline mx-2">Total Employees</p>
                    <p class="text-3xl mt-4 font-bold">50</p>
                </div>
                <div class="p-8 bg-gold rounded-md">
                    <i class="far fa-user-visor"></i> 
                    <p class="inline mx-2">Total Users</p>
                    <p class="text-3xl mt-4 font-bold">250</p>
                </div>
            </section>
            <header class="font-semibold text-2xl mt-16">Statistics</header>
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <p class="p-4"><i class="far fa-business-time mr-2 text-gold"></i>Job Success Rate </p>
                    <canvas id="my-chart"></canvas>
                </div>
                <div>
                    <p class="p-4"><i class="far fa-user-clock mr-2 text-gold"></i>Employee Attendance </p>

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3"></th>
                                    <th scope="col" class="px-6 py-3">
                                        Employee
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Score
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <i class="far fa-trophy"></i>
                                    </th>
                                    <td class="px-6 py-4">
                                        Emmanuel Ortega
                                    </td>
                                    <td class="px-6 py-4">
                                        30
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        2.
                                    </th>
                                    <td class="px-6 py-4">
                                        White Margot Wellington
                                    </td>
                                    <td class="px-6 py-4">
                                        20
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        3.
                                    </th>
                                    <td class="px-6 py-4">
                                        Anston Pollengranny
                                    </td>
                                    <td class="px-6 py-4">
                                        10
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <p class="text-2xl p-4 font-semibold mt-16">Revenue Stream</p>
            <section class="grid grid-cols-3 grid-rows-1 gap-4">
                {{-- <div class="flex gap-3 w-full"> --}}
                <div class="p-8 bg-black text-white rounded-md">
                    <i class="far fa-cash-register"></i> 
                    <p class="inline mx-2">Social Media Revenue</p>
                    <p class="text-3xl mt-4 font-bold">$10,000.00</p>
                </div>
                <div class="p-8 bg-black text-white rounded-md rows-span-3">
                    <i class="far fa-cash-register"></i> 
                    <p class="inline mx-2">Merch Revenue</p>
                    <p class="text-3xl mt-4 font-bold">$10,000.00</p>
                </div>
                <div class="p-8 bg-gold rounded-md row-span-2">
                    <i class="far fa-dollar-sign"></i> 
                    <p class="inline mx-2">Project funds</p>
                    <p class="text-4xl mt-4 font-bold">$2,000,000.00</p>
                    <p class="mt-4">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos natus laudantium commodi in dolor vel atque modi numquam ipsum quae! <br /><br />Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa atque temporibus eveniet ad laudantium quidem vel beatae exercitationem incidunt reprehenderit eligendi eos praesentium fugit numquam neque cum, magni sint modi ratione quis! Molestiae ab unde explicabo repudiandae quisquam pariatur!
                    </p>
                </div>
                <div class="p-8 bg-gold rounded-md col-span-2">
                    <i class="far fa-podcast"></i> 
                    <p class="inline mx-2">Media Platforms</p>
                    <div class="flex gap-4 justify-center my-8">
                        <i class="fab fa-facebook fa-4x bg-black text-white px-4 rounded-lg"></i>
                        <i class="fab fa-instagram fa-4x bg-black text-white px-4 rounded-lg"></i>
                        <i class="fab fa-reddit fa-4x bg-black text-white px-4 rounded-lg"></i>
                        <i class="fab fa-twitter fa-4x bg-black text-white px-4 rounded-lg"></i>
                        <i class="fab fa-cc-apple-pay fa-4x bg-black text-white px-4 rounded-lg"></i>
                        <i class="fab fa-microsoft fa-4x bg-black text-white px-4 rounded-lg"></i>
                        <i class="far fa-watch-fitness fa-4x bg-black text-white px-4 rounded-lg"></i>
                        <i class="fab fa-google-plus-g fa-4x bg-black text-white px-4 rounded-lg"></i>
                        <i class="fab fa-google-wallet fa-4x bg-black text-white px-4 rounded-lg"></i>
                    </div>
                </div>
            </section>
        </div>
    </x-dashboard-navbar>

<script>
  const ctx = document.getElementById('my-chart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ],
      datasets: [{
        label: '# of Successful Jobs',
        data: [12, 19, 3, 5, 2, 3, 15, 9, 8, 11, 7, 19],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
</x-base-struct>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<body class="antialiased">
  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block z-10 flex sm:flex-1 lg:lex-none">
      @auth
          <button class="hover:bg-gray-100 p-2"><a href="{{ url('/dashboard') }}" class="text-sm text-gray-600 dark:text-gray-900 ">Dashboard</a></button>
          <form method="POST" action="{{ route('logout') }}" class="p-2 hover:bg-gray-100" >
              @csrf

              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log Out') }}
              </x-dropdown-link>
          </form>
      @else
          <a href="{{ route('login') }}" class="text-sm text-black dark:text-gray-900 underline">Log in</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
          @endif
      @endauth
  </div>
@endif



<div class="flex h-full">

  <!-- Static sidebar for desktop -->
  <div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex w-64 flex-col">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex min-h-0 flex-1 flex-col border-r border-gray-200 bg-gray-100">
        <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
          <div class="flex flex-shrink-0 items-center px-4">
          </div>
          <nav aria-label="Sidebar" class="sticky top-4 divide-y divide-gray-300">
            <div class="space-y-1 pb-8">
              <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-700 hover:bg-gray-50" -->
              <a href="/management/mgthome" class="bg-gray-200 text-gray-900 group flex items-center rounded-md px-3 py-2 text-sm font-medium" aria-current="page">
                <svg class="text-gray-500 -ml-1 mr-3 h-6 w-6 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Home
              </a>
  
              <a href="{{route('management.mgtcalendar')}}" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md">
                <!-- Heroicon name: outline/calendar -->
                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                </svg>
                Calendar
              </a>
  
              <a href="/management/mgtproducts" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/megaphone -->
                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z" />
                </svg>
                Products
              </a>
  
              <a href="/management/employees" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/megaphone -->
                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
                Staff
            </a>
            <a href="/management/employees" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/megaphone -->
                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
                Tables
            </a>
            </div>
            <a href="/management/category" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
              <!-- Heroicon name: outline/megaphone -->
              <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
                Category
            </a>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
  <div class="flex min-w-0 flex-1 flex-col overflow-hidden">
    <div class="lg:hidden">
      <div class="flex items-center justify-between border-b border-gray-200 bg-gray-50 px-4 py-1.5">
        <div>
        </div>
        <div>
          <button type="button" class="-mr-3 inline-flex h-12 w-12 items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-pink-600">
            <span class="sr-only">Open sidebar</span>
            <!-- Heroicon name: outline/bars-3 -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div class="relative isolate overflow-hidden shadow-2xl rounded-xl">
      <div class="border-b border-b-gray-900/10 lg:border-t lg:border-t-gray-900/5 m-2">
        <dl class="mx-auto grid max-w-7xl grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 lg:px-2 xl:px-0">
          <!-- Sales Card -->
          <div class="block shadow-md mr-2 rounded-lg flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8 bg-gradient-to-r from-amber-300 to-amber-500" onclick="showChart('sales')">
            <dt class="text-sm font-medium leading-6 text-gray-500">Sales Overview</dt>
            @if(isset($salesData))
                <dd class="text-xs font-medium text-gray-900">
                    @if($salesData->percentage_increase > 0)
                        +{{ $salesData->percentage_increase }}%
                    @else
                        {{ $salesData->percentage_increase }}%
                    @endif
                </dd>
                <dd class="text-md w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">${{ $salesData->amount }}</dd>
            @else
                <!-- Display zero values if no data available -->
                <dd class="text-xs font-medium text-gray-900">0%</dd>
                <dd class="text-md w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$0.00</dd>
            @endif
          </div>

          <!-- Performance Card -->
          <div class="block shadow-md mr-2 rounded-lg flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8 sm:border-l bg-gradient-to-r from-yellow-500 to-yellow-600" onclick="showChart('performance')">
            <dt class="text-sm font-medium leading-6 text-gray-500">Performance</dt>
            @if(isset($performanceData))
                <dd class="text-xs font-medium text-gray-900">
                    @if($performanceData->percentage_increase > 0)
                        +{{ $performanceData->percentage_increase }}%
                    @else
                        {{ $performanceData->percentage_increase }}%
                    @endif
                </dd>
                <dd class="text-sm w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">{{ $performanceData->day }}</dd>
            @else
                <!-- Display zero values if no data available -->
                <dd class="text-xs font-medium text-gray-900">0%</dd>
                <dd class="text-sm w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">No data available.</dd>
            @endif
          </div>

          <!-- Traffic Card -->
          <div class="block shadow-md mr-2 rounded-lg flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8 lg:border-l bg-gradient-to-r from-rose-500 to-rose-700" onclick="showChart('traffic')">
            <dt class="text-sm font-medium leading-6 text-white">Traffic</dt>
            @if(isset($trafficData))
                <dd class="text-xs font-medium text-black">
                    @if($trafficData->percentage_increase > 0)
                        +{{ $trafficData->percentage_increase }}%
                    @else
                        {{ $trafficData->percentage_increase }}%
                    @endif
                </dd>
                <dd class="text-md w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">{{ $trafficData->amount }}</dd>
            @else
                <!-- Display zero values if no data available -->
                <dd class="text-xs font-medium text-black">0%</dd>
                <dd class="text-md w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">No data available.</dd>
            @endif
          </div>
      
          
            <div
                class="hidden block shadow-md mr-2 rounded-lg flex items-baseline flex-wrap justify-between gap-y-2  gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8 sm:border-l bg-gradient-to-r ">
                
            </div>
        </dl>
    </div>
    
    <div class="absolute left-0 top-full -z-10 mt-96 origin-top-left translate-y-40 -rotate-90 transform-gpu opacity-20 blur-3xl sm:left-1/2 sm:-ml-96 sm:-mt-10 sm:translate-y-0 sm:rotate-0 sm:transform-gpu sm:opacity-50"
        aria-hidden="true">
        <div class="aspect-[1154/678] w-[72.125rem] bg-gradient-to-br from-[#FF80B5] to-[#9089FC]"
            style="clip-path: polygon(100% 38.5%, 82.6% 100%, 60.2% 37.7%, 52.4% 32.1%, 47.5% 41.8%, 45.2% 65.6%, 27.5% 23.4%, 0.1% 35.3%, 17.9% 0%, 27.7% 23.4%, 76.2% 2.5%, 74.2% 56%, 100% 38.5%)">
        </div>
    </div>

    </div>
     <!-- Chart Placeholder -->
  <div id="chartContainer" style="display: none;" class="m-8">
    <canvas width="50" height="20"></canvas>
  </div>

  {{-- chart js --}}
  <!-- JavaScript code -->
  <script>
    // Function to fetch chart data from the server
    function fetchChartData(dataType) {
        fetch(`/getChartData/${dataType}`)
            .then(response => response.json())
            .then(chartData => {
                showChart(dataType, chartData);
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }

    // Function to create and display the chart
    function showChart(dataType, data) {
        const chartContainer = document.getElementById('chartContainer');
        chartContainer.innerHTML = ''; // Clear the chart container

        if (!data || data.length === 0) {
            // If no data available, show a message
            chartContainer.innerHTML = '<p>No data available for this card.</p>';
        } else {
            // If data available, create the chart
            const ctx = document.createElement('canvas');
            ctx.id = 'myChart';
            chartContainer.appendChild(ctx);

            const labels = dataType === 'sales' ? data.map(item => item.day) : data.map(item => item.day); // Use appropriate label field for performance and traffic cards
            const values = dataType === 'sales' ? data.map(item => item.amount) : data.map(item => item.amount); // Use appropriate data field for performance and traffic cards

            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: dataType,
                        data: values,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
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
        }
        chartContainer.style.display = 'block';
    }

    // Function to handle card click event
    function cardClicked(dataType) {
        const chartContainer = document.getElementById('chartContainer');
        chartContainer.innerHTML = ''; // Clear the chart container

        // Fetch data from the server using AJAX
        if (dataType === 'sales' || dataType === 'performance' || dataType === 'traffic') {
            fetchChartData(dataType);
        } else {
            // Use dummy data for other cards for testing
            showChart(dataType, getDummyData(dataType));
        }
    }

    // Dummy data for testing
    function getDummyData(dataType) {
        if (dataType === 'sales') {
            return [
                { day: '2023-07-20', amount: 500 },
                { day: '2023-07-21', amount: 800 },
                { day: '2023-07-22', amount: 600 }
            ];
        } else if (dataType === 'performance') {
            return [
                { day: '2023-07-20', amount: 2.1 },
                { day: '2023-07-21', amount: -3.5 },
                { day: '2023-07-22', amount: 6.2 },
                { day: '2023-07-23', amount: 8.7 } // Add the missing day from the PerformanceSeeder
            ];
        } else if (dataType === 'traffic') {
            return [
                { day: '2023-07-20', amount: 1400 },
                { day: '2023-07-21', amount: 1000 },
                { day: '2023-07-22', amount: 690 }
            ];
        } else {
            return []; // Return an empty array for unknown data types
        }
    }
  </script>

  {{-- chart js --}}

  </div>










  
  

</div>


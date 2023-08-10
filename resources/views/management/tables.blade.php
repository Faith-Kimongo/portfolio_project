<script src="https://cdn.tailwindcss.com"></script>

<div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex min-h-0 flex-1 flex-col bg-gray-200">
      <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">

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

            <a href="/management/tables" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                <!-- Heroicon name: outline/megaphone -->
                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
                Tables
            </a>
            </div>
            <div class="pt-10">
              <p class="px-3 text-sm font-medium text-gray-500" id="communities-headline">Categories</p>

            </div>
      </nav>
</div>
</div>
</div>

<div class="flex flex-1 flex-col md:pl-64">

    <main class="flex-1">
      <div class="py-6">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h1 class="text-2xl font-semibold text-gray-900">Tables</h1>
        </div>

        <div class="text-right mr-2">
          <a href ="/management/tables/create">
            <button type="submit" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 inline-flex justify-center rounded-md border border-transparent bg-gray-600 py-3 px-6 text-base font-medium text-white hover:text-black shadow-sm hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">Add Tables</button></a> 
          </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
          <div class="bg-white">
  <div class="mx-auto max-w-2xl py-8 px-4 sm:py-8 sm:px-6 lg:max-w-7xl lg:px-8">
    <!-- <h2 class="sr-only">Products</h2> -->

    <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
    @foreach($tables as $table)



      <a href="#" class="group">
        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
          <img src="{{ url('public/Image/'.$table->photo) }}" alt="" class="h-48 w-50 object-cover object-center group-hover:opacity-75">
          
							{{-- <img src="https://chart.apis.google.com/chart?cht=qr&chs=200x200&chl={{ url('/restaurant' .'/'.$table->id) }}&chld=H|0" alt="" class="object-cover object-center h-50 w-56"> --}}
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-blue"></button></div>
        <h3 class="mt-2 text-sm text-gray-700">Table_Name: {{$table->name}}</h3>
        <h3 class="mt-2 text-sm text-green-900">Table_Number: {{$table->number}}</h3>
        <h3 class="mt-2 text-sm text-green-900">Occupants: {{$table->occupants}}</h3>

                <!-- edit & delete button -->
          <div class="px-4 py-3 text-center sm:px-6 flex flex-row-1 gap-12">
            <form method="POST" action="/management/tables/{{ $table->id }}/edit">
              @csrf
              @method('GET')
              <button class="rounded-md bg-gray-700 py-1.5 px-2.5 text-sm font-semibold text-white hover:text-black shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-400 mb-3" type="submit">Edit</button>
            </form>
            <form method="POST" action="/management/tables/{{ $table->id }}">
              @csrf
              @method('DELETE')
              <button class="rounded-md bg-red-100 py-1.5 px-2.5 text-sm font-semibold text-gray-900 hover:text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-800 mb-3" type="submit">Delete</button>
            </form>

        </div>
      </a>

      @endforeach
</div>


    </div>
  </div>
</div>

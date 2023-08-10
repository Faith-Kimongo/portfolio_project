<script src="https://cdn.tailwindcss.com"></script>

<div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex min-h-0 flex-1 flex-col bg-gray-200">
      <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
        <div class="flex flex-shrink-0 items-center px-4">
          {{-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"> --}}
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

<div class="flex flex-1 flex-col md:pl-64">
    <div class="sticky top-0 z-10 bg-gray-100 pl-1 pt-1 sm:pl-3 sm:pt-3 md:hidden">
      <button type="button" class="-ml-0.5 -mt-0.5 inline-flex h-12 w-12 items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: outline/bars-3 -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <main class="flex-1">
      <div class="py-6">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
          <h1 class="text-2xl font-semibold text-gray-900 mt-4">CALENDAR</h1>
          <div class="bg-white">

            <!-- component -->
<!-- This is an example component -->
<div>

	<link rel="dns-prefetch" href="//unpkg.com" />
	<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

	<style>
		[x-cloak] {
			display: none;
		}
	</style>

<div class="antialiased sans-serif bg-gray-100 h-screen">
	<div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
		<div class="container mx-auto px-4 py-2 md:py-24">
			  
			<!-- <div class="font-bold text-gray-800 text-xl mb-4">
				Schedule Tasks
			</div> -->

			<div class="bg-white rounded-lg shadow overflow-hidden">

				<div class="flex items-center justify-between py-2 px-6">
					<div>
						<span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
						<span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
					</div>
					<div class="border rounded-lg px-1" style="padding-top: 2px;">
						<button 
							type="button"
							class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 items-center" 
							:class="{'cursor-not-allowed opacity-25': month == 0 }"
							:disabled="month == 0 ? true : false"
							@click="month--; getNoOfDays()">
							<svg class="h-6 w-6 text-gray-500 inline-flex leading-none"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
							</svg>  
						</button>
						<div class="border-r inline-flex h-6"></div>		
						<button 
							type="button"
							class="leading-none rounded-lg transition ease-in-out duration-100 inline-flex items-center cursor-pointer hover:bg-gray-200 p-1" 
							:class="{'cursor-not-allowed opacity-25': month == 11 }"
							:disabled="month == 11 ? true : false"
							@click="month++; getNoOfDays()">
							<svg class="h-6 w-6 text-gray-500 inline-flex leading-none"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
							</svg>									  
						</button>
					</div>
				</div>	

				<div class="-mx-1 -mb-1">
					<div class="flex flex-wrap" style="margin-bottom: -40px;">
						<template x-for="(day, index) in DAYS" :key="index">	
							<div style="width: 14.26%" class="px-2 py-2">
								<div
									x-text="day" 
									class="text-gray-600 text-sm uppercase tracking-wide font-bold text-center"></div>
							</div>
						</template>
					</div>

					<div class="flex flex-wrap border-t border-l">
						<template x-for="blankday in blankdays">
							<div 
								style="width: 14.28%; height: 120px"
								class="text-center border-r border-b px-4 pt-2"	
							></div>
						</template>	
						<template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
							<div style="width: 14.28%; height: 120px" class="px-4 pt-2 border-r border-b relative">
								<div
									@click="showEventModal(date)"
									x-text="date"
									class="inline-flex w-6 h-6 items-center justify-center cursor-pointer text-center leading-none rounded-full transition ease-in-out duration-100"
									:class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"	
								></div>
								<div style="height: 80px;" class="overflow-y-auto mt-1">
									<!-- <div 
										class="absolute top-0 right-0 mt-2 mr-2 inline-flex items-center justify-center rounded-full text-sm w-6 h-6 bg-gray-700 text-white leading-none"
										x-show="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"
										x-text="events.filter(e => e.event_date === new Date(year, month, date).toDateString()).length"></div> -->

									<template x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">	
										<div
											class="px-2 py-1 rounded-lg mt-1 overflow-hidden border"
											:class="{
												'border-blue-200 text-blue-800 bg-blue-100': event.event_theme === 'blue',
												'border-red-200 text-red-800 bg-red-100': event.event_theme === 'red',
												'border-yellow-200 text-yellow-800 bg-yellow-100': event.event_theme === 'yellow',
												'border-green-200 text-green-800 bg-green-100': event.event_theme === 'green',
												'border-purple-200 text-purple-800 bg-purple-100': event.event_theme === 'purple'
											}"
										>
											<p x-text="event.event_title" class="text-sm truncate leading-tight"></p>
										</div>
									</template>
								</div>
							</div>
						</template>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div style=" background-color: rgba(0, 0, 0, 0.8)" class="fixed z-40 top-0 right-0 left-0 bottom-0 h-full w-full" x-show.transition.opacity="openEventModal">
			<div class="p-4 max-w-xl mx-auto relative absolute left-0 right-0 overflow-hidden mt-24">
				<div class="shadow absolute right-0 top-0 w-10 h-10 rounded-full bg-white text-gray-500 hover:text-gray-800 inline-flex items-center justify-center cursor-pointer"
					x-on:click="openEventModal = !openEventModal">
					<svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path
							d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
					</svg>
				</div>

				<div class="shadow w-full rounded-lg bg-white overflow-hidden w-full block p-8">
					
					<h2 class="font-bold text-2xl mb-6 text-gray-800 border-b pb-2">Add Event Details</h2>
				 
					<div class="mb-4">
						<label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event title</label>
						<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_title">
					</div>

					<div class="mb-4">
						<label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Event date</label>
						<input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded-lg w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text" x-model="event_date" readonly>
					</div>

					<div class="inline-block w-64 mb-4">
						<label class="text-gray-800 block mb-1 font-bold text-sm tracking-wide">Select a theme</label>
						<div class="relative">
							<select @change="event_theme = $event.target.value;" x-model="event_theme" class="block appearance-none w-full bg-gray-200 border-2 border-gray-200 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-blue-500 text-gray-700">
									<template x-for="(theme, index) in themes">
										<option :value="theme.value" x-text="theme.label"></option>
									</template>
								
							</select>
							<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
							</div>
						</div>
					</div>
 
					<div class="mt-8 text-right">
						<button type="button" class="bg-white hover:bg-gray-100 text-gray-700 font-semibold py-2 px-4 border border-gray-300 rounded-lg shadow-sm mr-2" @click="openEventModal = !openEventModal">
							Cancel
						</button>	
						<button type="button" class="bg-gray-800 hover:bg-gray-700 text-white font-semibold py-2 px-4 border border-gray-700 rounded-lg shadow-sm" @click="addEvent()">
							Save Event
						</button>	
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->
	</div>

	<script>
		const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

		function app() {
			return {
				month: '',
				year: '',
				no_of_days: [],
				blankdays: [],
				days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

				events: [
					{
						event_date: new Date(2020, 3, 1),
						event_title: "April Fool's Day",
						event_theme: 'blue'
					},

					{
						event_date: new Date(2020, 3, 10),
						event_title: "Birthday",
						event_theme: 'red'
					},

					{
						event_date: new Date(2020, 3, 16),
						event_title: "Upcoming Event",
						event_theme: 'green'
					}
				],
				event_title: '',
				event_date: '',
				event_theme: 'blue',

				themes: [
					{
						value: "blue",
						label: "Blue Theme"
					},
					{
						value: "red",
						label: "Red Theme"
					},
					{
						value: "yellow",
						label: "Yellow Theme"
					},
					{
						value: "green",
						label: "Green Theme"
					},
					{
						value: "purple",
						label: "Purple Theme"
					}
				],

				openEventModal: false,

				initDate() {
					let today = new Date();
					this.month = today.getMonth();
					this.year = today.getFullYear();
					this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
				},

				isToday(date) {
					const today = new Date();
					const d = new Date(this.year, this.month, date);

					return today.toDateString() === d.toDateString() ? true : false;
				},

				showEventModal(date) {
					// open the modal
					this.openEventModal = true;
					this.event_date = new Date(this.year, this.month, date).toDateString();
				},

				addEvent() {
					if (this.event_title == '') {
						return;
					}

					this.events.push({
						event_date: this.event_date,
						event_title: this.event_title,
						event_theme: this.event_theme
					});

					console.log(this.events);

					// clear the form data
					this.event_title = '';
					this.event_date = '';
					this.event_theme = 'blue';

					//close the modal
					this.openEventModal = false;
				},

				getNoOfDays() {
					let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

					// find where to start calendar day of week
					let dayOfWeek = new Date(this.year, this.month).getDay();
					let blankdaysArray = [];
					for ( var i=1; i <= dayOfWeek; i++) {
						blankdaysArray.push(i);
					}

					let daysArray = [];
					for ( var i=1; i <= daysInMonth; i++) {
						daysArray.push(i);
					}
					
					this.blankdays = blankdaysArray;
					this.no_of_days = daysArray;
				}
			}
		}
	</script>
  </div>


      <!-- More products... -->
    </div>
  </div>
</div>




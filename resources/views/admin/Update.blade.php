<script src="https://cdn.tailwindcss.com"></script>

<div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex min-h-0 flex-1 flex-col bg-gray-200">
      <div class="flex flex-1 flex-col overflow-y-auto pt-5 pb-4">
        <div class="flex flex-shrink-0 items-center px-4">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
</div>
</div>
</div>

<div>
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <!-- <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p> -->
      </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
      <form action="/admin/restaurants/{{$restaurant->id}}" enctype="multipart/form-data" method="POST">
      @csrf
      @method('PUT')
      
        <div class="shadow-lg sm:overflow-hidden sm:rounded-md">
          <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <div class="mt-1 flex rounded-md shadow-lg text-black ">
                  <!-- <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">http://</span> -->
                  <input type="text" name="name" id="company-website" class="block w-full flex-1 rounded-none rounded-r-md border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{$restaurant->name}}"> 
                </div>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Email</label>
                <div class="mt-1 flex rounded-md shadow-lg text-black ">
                  <!-- <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">http://</span> -->
                  <input type="text" name="email" id="company-website" class="block w-full flex-1 rounded-none rounded-r-md border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{$restaurant->email}}"> 
                </div>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Phone</label>
                <div class="mt-1 flex rounded-md shadow-lg text-black ">
                  <!-- <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">http://</span> -->
                  <input type="text" name="phone" id="company-website" class="block w-full flex-1 rounded-none rounded-r-md border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{$restaurant->phone}}"> 
                </div>
              </div>
            </div>

            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Location</label>
                <div class="mt-1 flex rounded-md shadow-lg text-black ">
                  <!-- <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">http://</span> -->
                  <input type="text" name="location" id="company-website" class="block w-full flex-1 rounded-none rounded-r-md border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{$restaurant->location}}"> 
                </div>
              </div>
            </div>


          <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
          <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-red-300 py-2 px-4 text-sm font-medium text-black hover:text-white shadow-sm hover:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</button>
            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-300 py-2 px-4 text-sm font-medium hover:text-white text-black shadow-sm hover:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


      </form>
    </div>
  </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Restaurants</title>
</head>
<body>
  <header>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-4 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="flex space-x-48 flex-1 justify-between">
            <a href="index.html" class="border-t-2 border-transparent pr-1 inline-flex items-center text-sm font-medium text-black hover:text-black">
              <!-- Heroicon name: solid/arrow-narrow-left -->
              <svg class="mr-3 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd" />
              </svg>
              
            </a>
            </div>
        </div>
    </div>
            </header>
      
            @yield('content')
        </div>
      </div>

      <script src="main.js"></script>
</body>
</html>
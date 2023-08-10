<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <script src="main.js"></script>


    {{-- <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script> --}}

    <title>SW</title>
    <link rel="stylesheet" href="./css/tailwind.css" />
</head>
<body>
  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block z-10 flex sm:flex-1 lg:lex-none">
      @auth
          <button class="hover:bg-gray-100 p-2"><a href="{{ url('/dashboard') }}" class="text-sm text-white hover:text-black dark:text-gray-900 ">Dashboard</a></button>
          <form method="POST" action="{{ route('logout') }}" class="p-2 hover:bg-gray-100" >
              @csrf

              <x-dropdown-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();" class="text-white hover:text-black">
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

    <div class="bg-auto bg-no-repeat bg-center">
      <div class="absolute inset-0 ">
        <img class="w-full h-full object-cover opacity-100 scale-100" src="images/main.jpg" alt="">
      </div>
 
        <div class="relative max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
          <div class="flex justify-center items-center">
            <a id="btn-scan-qr"><img class=" w-28 h-28" src="https://chart.apis.google.com/chart?cht=qr&chs=300x300&chl={{ url('/') }}&chld=H|0" alt=""></a>
            <video id="camera" class="hidden w-32 h-32"></video>

            <canvas hidden="" id="qr-canvas"></canvas>

            <div id="qr-result" hidden="">
              <b>Menu Link:</b> <span id="outputData"></span>
            </div>
          </div>
            
            
            
          <div class="text-center">
            <h2 class="text-base text-2xl font-bold font-semibold text-black tracking-wide uppercase">Tap the Code above to Scan the QR Code </h2>
            <!-- <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Take control of your team.</p> -->
            <a href="/user/merchants" class="mt-36 rounded-full shadow-inline uppercase boarder-4 font-bold inline-flex items-center text-base hover:text-white bg-indigo-400 hover:bg-indigo-900 text-black font-bold py-4 px-8 rounded -z-1" id='btn-scan-qr'>SCAN </a>
          </div>
        </div>
        
      </div>

      <script src="{{ asset('js/qr_packed.js') }}"></script>
    <script src="{{ asset('js/qr-code.js') }}"></script>
</body>
</html>

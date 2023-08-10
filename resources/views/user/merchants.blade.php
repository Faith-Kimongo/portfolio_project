{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
@extends('layouts.users')
@section('content')
<div class="bg-white py-12 sm:py-8">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="text-center max-w-7xl lg:mx-0 mb-8">
      <h2 class="text-3xl font-bold tracking-center text-gray-900 sm:text-4xl">Choose Restaurant</h2>
    </div>
    <ul role="list" class="restaurant-list grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 xl:gap-x-8">
      @foreach($merchants as $index => $merchant)
        <li class="restaurant-item bg-white {{ $index >= 6 ? 'hidden' : '' }}">
          {{-- {{ route('category') }} --}}
          <a href="/user/merchants/{{ $merchant->user_id }}">
            <img class="w-50 h-48 rounded-2xl object-cover" src="{{ url('public/Image/'.$merchant->photo) }}" alt="{{$merchant->name}}">
            <button class="bg-gray-100 border border-full border-gray-300 pr-1 pl-1 mt-1 rounded-md object-center">
              <h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900">Name: {{$merchant->name}}</h3>
            </button>
          </a>
        </li>
      @endforeach
    </ul>
    
    <div class="text-center max-w-7xl lg:mx-0 mb-8 mt-6">
      <button class="view-more-button rounded-md bg-gray-700 py-1.5 px-2.5 text-sm font-semibold text-white hover:text-black shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-400 mb-3" onclick="toggleRestaurants()">View More</button>            
    </div>
  </div>
</div>

<script>
  function toggleRestaurants() {
    var restaurants = document.getElementsByClassName("restaurant-item");
    for (var i = 6; i < restaurants.length; i++) {
      restaurants[i].classList.toggle("hidden");
    }
  }
</script>
@endsection


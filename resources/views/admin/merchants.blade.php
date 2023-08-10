@extends('layouts.admin')

@section('content')

<div class="flex flex-1 flex-col md:pl-64">

    <main class="flex-1">
      <div class="py-6">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h1 class="text-2xl font-semibold text-gray-900">Merchants</h1>
        </div>

        <div class="text-right mr-2">
          <a href ="/admin/merchants/create">
            <button type="submit" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 inline-flex justify-center rounded-md border border-transparent bg-gray-600 py-3 px-6 text-base font-medium text-white hover:text-black shadow-sm hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">Add Merchants</button></a> 
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">

          <div class="bg-white">
  <div class="mx-auto max-w-2xl py-8 px-4 sm:py-8 sm:px-6 lg:max-w-7xl lg:px-8">

    <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
    @foreach($merchants as $merchant)



      <a href="#" class="group">
        <div>
          <img src="{{ url('public/Image/'.$merchant->photo) }}" alt="{{$merchant->name}}" class="w-50 h-48 rounded-2xl object-cover" >
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-blue"></button></div>
        <h3 class="mt-2 text-sm text-gray-700">Name: {{$merchant->name}}</h3>
        <h3 class="mt-2 text-sm text-blue-900">Email: {{$merchant->email}}</h3>
        <h3 class="mt-2 text-sm text-gray-700">Phone: {{$merchant->phone}}</h3>
        <h3 class="mt-2 text-sm text-gray-700">Location: {{$merchant->location}}</h3>


                <!-- edit & delete button -->
          <div class="px-4 py-3 text-center sm:px-6 flex flex-row-1 gap-12">
            <form method="POST" action="/admin/merchants/{{ $merchant->id }}/edit">
              @csrf
              @method('GET')
              <button class="rounded-md bg-gray-700 py-1.5 px-2.5 text-sm font-semibold text-white hover:text-black shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-400 mb-3" type="submit">Edit</button>
            </form>
            <form method="POST" action="/admin/merchants/{{ $merchant->id }}">
              @csrf
              @method('DELETE')
              <button class="rounded-md bg-red-100 py-1.5 px-2.5 text-sm font-semibold text-gray-900 hover:text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-800 mb-3" type="submit">Delete</button>
            </form>

        </div>
      </a>

      @endforeach
</div>
@endsection

                    
      

      


    




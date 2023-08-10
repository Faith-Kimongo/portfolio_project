@extends('layouts.admin')

@section('content')
<div class="flex flex-1 flex-col md:pl-64">

    <main class="flex-1">
      <div class="py-6">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h1 class="text-2xl font-semibold text-gray-900">Billing</h1>
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
          <div class="bg-white">
  <div class="mx-auto max-w-2xl py-8 px-4 sm:py-8 sm:px-6 lg:max-w-7xl lg:px-8">
    <!-- <h2 class="sr-only">Products</h2> -->

    <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
    @foreach($merchantbills as $merchantbill)


      <a href="#" class="group grid grid-cols-3">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-blue"></button></div>
        <h3 class="mt-2 text-sm text-gray-700">Name: {{$merchantbill->name}}</h3>
        <h3 class="mt-2 text-sm text-green-900">Total Amount: {{$merchantbill->total_amount}}</h3>

                <!-- edit & delete button -->
          <div class="px-4 py-3 text-center sm:px-6 flex flex-row-1 gap-12">
            <form method="POST" action="/admin/merchantbills/{{ $merchantbill->id }}/edit">
              @csrf
              @method('GET')
              <button class="rounded-md bg-gray-700 py-1.5 px-2.5 text-sm font-semibold text-white hover:text-black shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-400 mb-3" type="submit">Edit</button>
            </form>
            <form method="POST" action="/admin/merchantbills/{{ $merchantbill->id }}">
              @csrf
              @method('DELETE')
              <button class="rounded-md bg-red-100 py-1.5 px-2.5 text-sm font-semibold text-gray-900 hover:text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-red-800 mb-3" type="submit">Delete</button>
            </form>

        </div>
      </a>

      @endforeach
</div>
@endsection
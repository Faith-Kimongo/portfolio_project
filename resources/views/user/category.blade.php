@extends('layouts.users')

@section('content')
{{-- <h1>Categories for {{ $merchant->restaurant_id }}</h1> --}}

@foreach ($categories as $category)
    <div class="category">
        <img class="w-50 h-48 rounded-2xl object-cover" src="{{ url('public/category/'.$category->photo) }}" alt="{{$category->name}}">
        <h2>{{ $category->name }}</h2>
        <!-- You can add more details about the category here -->
    </div>
@endforeach
@endsection

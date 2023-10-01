@extends('layouts.app')
@section('content')
<h1>Services</h1>
@foreach($services as $service)
  <div>
    <h2>{{ $service->name }}</h2>
    <p>{{ $service->description }}</p>
    <p>Price: {{ $service->price }}</p>
    @if(env('APP_ENV') === 'local')  // Assuming you're an admin in a local environment
      <a href='{{ url("services/$service->id/edit") }}'>Edit</a>
    @endif
    <a href='{{ url("services/$service->id") }}'>Order</a>
  </div>
@endforeach
@endsection
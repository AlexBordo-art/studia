// services/edit.blade.php
@extends('layouts.app')
@section('content')
<h1>Edit Service</h1>
<form method='post' action='{{ url("services/$service->id") }}'>
  @csrf
  @method('PUT')
  <input type='text' name='name' value='{{ $service->name }}'>
  <textarea name='description'>{{ $service->description }}</textarea>
  <input type='text' name='price' value='{{ $service->price }}'>
  <button type='submit'>Update</button>
</form>
@endsection
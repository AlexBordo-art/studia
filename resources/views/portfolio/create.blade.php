<!-- portfolio/create.blade.php -->
@extends('layouts.app')
@section('content')
<h1>Create Portfolio</h1>
<form action='{{ url("portfolio") }}' method='post'>
  @csrf
  <!-- Add form fields here -->
  <button type='submit'>Create</button>
</form>
@endsection
<!-- portfolio/edit.blade.php -->
@extends('layouts.app')
@section('content')
<h1>Edit Portfolio</h1>
<form action='{{ url("portfolio/$portfolio->id") }}' method='post'>
  @csrf
  @method('PUT')
  <!-- Add form fields here -->
  <button type='submit'>Update</button>
</form>
@endsection
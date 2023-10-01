// services/create.blade.php
@extends('layouts.app')
@section('content')
<h1>Create Service</h1>
<form method='post' action='{{ url("services") }}'>
  @csrf
  <input type='text' name='name' placeholder='Name'>
  <textarea name='description' placeholder='Description'></textarea>
  <input type='number' name='price' placeholder='Price'>
  <button type='submit'>Create</button>
</form>
@endsection
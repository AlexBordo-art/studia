<!-- portfolio/index.blade.php -->
@extends('layouts.app')
@section('content')
<h1>Portfolio</h1>
@foreach($portfolios as $portfolio)
  <div>
    <h2>{{ $portfolio->projectName }}</h2>
    <p>{{ $portfolio->description }}</p>
    <img src='{{ $portfolio->imageURL }}' alt='{{ $portfolio->projectName }}' />
    <a href='{{ url("portfolio/$portfolio->id") }}'>View Details</a>
  </div>
@endforeach
@endsection
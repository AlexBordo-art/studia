<!-- portfolio/show.blade.php -->
@extends('layouts.app')
@section('content')
<h1>{{ $portfolio->projectName }}</h1>
<p>{{ $portfolio->description }}</p>
<img src='{{ $portfolio->imageURL }}' alt='{{ $portfolio->projectName }}' />
<!-- Add more details here -->
@endsection
<!-- resources/views/banners/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <h1>{{ $banner->title }}</h1>
    <p>{{ $banner->description }}</p>
    <img src="{{ asset('images/'.$banner->image) }}" alt="{{ $banner->title }}" width="300">
</div>
@endsection
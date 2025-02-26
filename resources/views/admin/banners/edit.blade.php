<!-- resources/views/banners/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <h1>Edit Carousel Item</h1>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('banners.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $item->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $item->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link" value="{{ $item->link }}">
                </div>
                <div class="mb-3">
                    <label for="image_path" class="form-label">Image Path</label>
                    <input type="file" class="form-control" id="image_path" name="image_path" value="{{  $item->image_path }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</div>
@endsection
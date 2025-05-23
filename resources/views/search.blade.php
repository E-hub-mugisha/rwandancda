@extends('layouts.base')

@section('title', 'Results for "' . $query . '"')

@section('content')
<section class="cs_service_area cs_type_3">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_left">
                <h2 class="cs_section_title cs_accent_color mb-0">Search Results for: <strong>"{{ $query }}"</strong></h2>
            </div>
        </div>
        <div class="cs_height_100 cs_height_lg_40"></div>
        <div class="row cs_gap_y_30">

            {{-- Posts Section --}}
            <div class="mb-5">
                <h4 class="mb-3">📄 Posts</h4>
                @forelse($posts as $post)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('ncd_news', $post->slug) }}" class="text-decoration-none text-primary">
                                {{ $post->title }}
                            </a>
                        </h5>
                        <p class="card-text text-muted">
                            {{ Str::limit($post->content, 120) }}
                        </p>
                    </div>
                </div>
                @empty
                <div class="alert alert-warning">No posts found.</div>
                @endforelse
            </div>

            {{-- Programs Section --}}
            <div class="mb-5">
                <h4 class="mb-3">📚 Programs</h4>
                @forelse($programs as $program)
                <div class="card mb-2 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title mb-0">
                            <a href="{{ route('detail', $program->id ) }}" class="text-decoration-none text-success">
                                {{ $program->title }}
                            </a>
                        </h5>
                    </div>
                </div>
                @empty
                <div class="alert alert-warning">No programs found.</div>
                @endforelse
            </div>

            {{-- Resources Section --}}
            <div class="mb-5">
                <h4 class="mb-3">📦 Resources</h4>
                @forelse($resources as $resource)
                @if( empty( (json_decode($resource->file))[0]->download_link ) )
                @continue
                @else
                <div class="card mb-2 shadow-sm">
                    <div class="card-body">
                        <p class="mb-0">
                            <?php $file = (json_decode($resource->file))[0]->download_link; ?>
                            <a href="{{ URL::asset( $file ) }}" target="_blank" class="text-decoration-none text-dark">
                                {{ Str::limit($resource->title, 120) }}
                            </a>
                        </p>
                    </div>
                </div>
                @endif
                @empty
                <div class="alert alert-warning">No resources found.</div>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection
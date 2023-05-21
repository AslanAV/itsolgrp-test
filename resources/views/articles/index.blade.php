@extends('layouts.layout')

@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 p-2">
                    @foreach($tags as $tag)
                        <p class="badge rounded-pill text-bg-secondary">
                            {{ $tag->name }}
                        </p>
                    @endforeach

                </div>
                <div class="col-md-9 mx-auto p-2">
                    @foreach($articles as $article)
                        <div class="mx-auto p-2">
                            <div class="card">
                                <img
                                    src="https://static.giggster.com/images/location/6f4de4cd-f89b-48ba-8f9f-4e51bf188dae/5cc6c5c3-8663-4aca-9198-905747f5d4de/gallery_2.jpeg"
                                    class="card-img-top" alt="blog-mini">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text">{{ Str::limit(preg_replace('/<([^>]+)>/', PHP_EOL, $article->content), 300, "...") }}</p>
                                    <p class="badge rounded-pill text-bg-secondary">Likes {{ $article->likes }}</p>
                                    <p class="badge rounded-pill text-bg-secondary">Views {{ $article->views }}</p>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{ route('article', $article) }}"
                                           class="btn btn-light view-btn-submit-{{ $article->id }}">Открыть</a>
                                        @include('components.views_script')
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mt-5 m-3 d-grid justify-content-md-end">
            {{ $articles->links('pagination::bootstrap-5') }}
        </div>
@endsection

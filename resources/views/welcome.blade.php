@extends('layouts.layout')

@section('content')
    <div class="px-4 py-5 my-5 text-left">
        <h1 class="display-1 text-body-emphasis">Успех</h1>
        <div class="col-lg-6">
            <p class="lead mb-4">Для молодых и успешных</p>
        </div>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($articles as $article)

                    <div class="col-md-4 mx-auto p-2">
                        <div class="card">
                            <img
                                src="https://image.placeholder.co/insecure/w:640/aHR0cHM6Ly9jZG4uc3BhY2VyLnByb3BlcnRpZXMvZmNmMDJjMGQtZGQzNi00YmM3LThjMDQtNGFkMDFjNWYyMGM3"
                                class="card-img-top" alt="blog-mini">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ Str::limit(preg_replace('/<([^>]+)>/', PHP_EOL, $article->content), 100, "...") }}</p>
                                <a href="#" class="badge rounded-pill text-bg-secondary">Likes {{ $article->likes }}</a>
                                <a href="#" class="badge rounded-pill text-bg-secondary">Views {{ $article->views }}</a>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="{{ route('article', $article->id) }}" class="btn btn-light ">Открыть</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>

    {{--    {{ $articles->links('pagination::simple-bootstrap-5') }}--}}
@endsection

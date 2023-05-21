@extends('layouts.layout')
@php
    use Carbon\Carbon;
    use \App\Helpers\SortLIFOHelper;

    /** @var \Illuminate\Support\Collection $article */
    $comments = SortLIFOHelper::sort($article->comments->toArray());
@endphp
@section('content')
    <div class="album py-5 bg-light">
        <div class="mx-auto p-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>

                    <form class="d-inline" action="" method="post">
                        @csrf
                        <input type="hidden" name="article_id" id="article_id" value="{{ $article->id }}" required="">
                        <button type="button" class="btn btn-link like-btn-submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                 class="bi bi-suit-heart m-2" viewBox="0 0 16 16">
                                <path
                                    d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595L8 6.236zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.55 7.55 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
                            </svg>
                        </button>
                    </form>


                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                         class="bi bi-eye-fill m-2" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path
                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                    </svg>
                    <p class="d-inline">{{ $article->views }}</p>
                    <div class="m-3">
                        @foreach($article->tags as $tag)
                            <a href="#" class="d-inline badge rounded-pill text-bg-secondary m-1">
                                {{ $tag->name }}
                            </a>
                        @endforeach
                    </div>
                    <p class="card-text">{{  $article->content }}</p>

                    <h5 class="m-5">Комментарии</h5>
                    <hr>
                    @foreach($comments as $comment)
                        <p class="card-text">{{  $comment['body'] }}</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <p class="card-text">{{  Carbon::parse($comment['created_at']) }}</p>
                        </div>
                        <hr>
                    @endforeach

                    <div class="container">

                        <h5 class="m-2">Оставить комментарий</h5>

                        <!-- HTML-форма, оформленная с помощью стилей Bootstrap -->
                        <form method="post" action="#" autocomplete="off">
                            <div class="form-group">
                                <input name="subject" type="text" class="form-control my-3" id="subject"
                                       placeholder="Тема сообщения">
                            </div>
                            <div class="form-group">
                                <textarea name="body" type="text" class="form-control my-3" id="body"
                                          placeholder="Сообщение"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

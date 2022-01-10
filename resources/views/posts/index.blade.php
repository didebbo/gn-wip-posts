@extends('layouts.posts')

@section('body')
    <div class="index">
        <a href="{{ route('welcome') }}">
            << </a>
                <h1>Dasboard</h1>
                <ul class="dashboard">
                    @foreach ($posts as $post)
                        <li class="post">
                            <div class="title">
                                <a href="{{ route('posts.show', $post['id']) }}">
                                    <h2>
                                        {{ $post['title'] }}
                                    </h2>
                                </a>
                            </div>
                            <div class="body">
                                <p>
                                    {{ $post['body'] }}
                                </p>
                            </div>
                            <div class="user">
                                <small>
                                    <strong>
                                        {{ $post['user'] }}
                                    </strong>
                                    on {{ date('d/m/Y \a\t H:i:s', strtotime($post['created_at'])) }}
                                </small>
                            </div>
                        </li>
                    @endforeach
                </ul>
    </div>
@endsection

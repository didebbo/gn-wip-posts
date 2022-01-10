@extends('layouts.posts')

@section('body')
    <div class="create">
        <a href="{{ route('welcome') }}">
            << </a>
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                    <ul>
                        <li>
                            <label for="user">
                                <span>Name:</span>
                                <input type="text" name="user" value="{{ old('user') }}">
                                @error('user')
                                    <small>
                                        {{ $message }}
                                    </small>
                                @enderror
                            </label>
                        </li>
                        <li>
                            <label for="title">
                                <span>Title:</span>
                                <input type="text" name="title" value="{{ old('title') }}">
                                @error('title')
                                    <small>
                                        {{ $message }}
                                    </small>
                                @enderror
                            </label>
                        </li>
                        <li>
                            <label for="body">
                                <span>Message:</span>
                                <textarea name="body">{{ old('body') }}</textarea>
                                @error('body')
                                    <small>
                                        {{ $message }}
                                    </small>
                                @enderror
                            </label>
                        </li>
                        <li>
                            <button type="submit">Invia</button>
                        </li>
                    </ul>
                </form>
    </div>
@endsection

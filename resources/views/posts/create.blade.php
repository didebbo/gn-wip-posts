<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Post</title>
    <style>
        ul {
            list-style: none;
        }

        span {
            display: inline-block;
            width: 5em;
        }

        textarea {
            width: 400px;
            height: 200px;
        }

    </style>
</head>

<body>
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
</body>

</html>

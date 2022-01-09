<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            resize: none;
        }

    </style>
</head>

<body>
    <div class="post">

        <div class="title">
            <h1>
                {{ $post['title'] }}
            </h1>
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
                on {{ $post['created_at'] }}
            </small>
        </div>
    </div>

    <div class="comments">
        <h3>
            Comments:
        </h3>
        <ul>
            @foreach ($post['comments'] as $comment)
                <li class="comment">
                    <div class="body">
                        <p>
                            {{ $comment['body'] }}
                        </p>
                    </div>
                    <div class="user">
                        <small>
                            <strong>
                                {{ $comment['user'] }}
                            </strong>
                            on {{ $comment['created_at'] }}
                        </small>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <form action="{{ route('comments.store') }}" method="POST">
        <h3>New Comment:</h3>
        @csrf
        <ul>
            <li hidden>
                <label for="post_id">
                    <input type="hidden" name="post_id" value="{{ $post['id'] }}">
                </label>
            </li>
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

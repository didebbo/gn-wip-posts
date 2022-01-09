<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <style>
        ul {
            list-style: none;
        }

    </style>
</head>

<body>
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
                        on {{ $post['created_at'] }}
                    </small>
                </div>
            </li>
        @endforeach
    </ul>
</body>

</html>

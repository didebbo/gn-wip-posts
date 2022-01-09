<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>

</html>

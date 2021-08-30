<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts list</title>
</head>
<body>

<ul>
    <li><a href="{{ route('posts.show', 1) }}">Post 1</a> |
        <a href="{{ route('posts.edit', 1) }}">Edit</a></li>
    <li><a href="{{ route('posts.show', 2) }}">Post 2</a> |
        <a href="{{ route('posts.edit', 2) }}">Edit</a></li>
    <li><a href="{{ route('posts.show', 3) }}">Post 3</a> |
        <a href="{{ route('posts.edit', 3) }}">Edit</a></li>
    <li><a href="{{ route('posts.show', 4) }}">Post 4</a> |
        <a href="{{ route('posts.edit', 4) }}">Edit</a></li>
</ul>

</body>
</html>

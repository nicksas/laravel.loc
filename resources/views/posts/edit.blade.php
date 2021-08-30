<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit # {{ $id }}</title>
</head>
<body>
<h1>Edit # {{ $id }}</h1>

<form action="{{ route('posts.update', $id) }}" method="post">

    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Название">
    <textarea name="description" cols="30" rows="10" placeholder="Описание"></textarea>
    <button type="submit">Отправить</button>

</form>

</body>
</html>

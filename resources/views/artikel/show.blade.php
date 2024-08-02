<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel</title>
</head>
<body>
    <title>{{ $artikel->title }}</title><br/>
    <p>{{ $artikel->content }}</p>
    <p>Penulis : {{ $artikel->createdBy->name }} pada {{ $artikel->created_at }}</p>
</body>
</html>

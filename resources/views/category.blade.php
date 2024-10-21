<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Category | {{ $category->title }}</title>
</head>
<body>
    <h1>{{ $category->name }}</h1>

    @foreach ($category->blogs as $blog)
        <div>
            <h3>{{ $blog->title }}</h3>
            <p>{{ $blog->body }}</p>
        </div>
    @endforeach
</body>
</html>
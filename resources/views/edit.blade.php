<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Create</title>
</head>
<body>
    <form action="/blog/{{ $blog->id }}/update" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $blog->title }}">
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10">{{ $blog->body }}</textarea>
        <select name="category" id="category">
            @foreach ($categories as $id => $name)
                <option value="{{ $id }}" {{ $id == $blog->category_id ? 'SELECTED' : ''}}>{{ $name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
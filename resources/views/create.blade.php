<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Create</title>
</head>
<body>
    <form action="/blog/store" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title" >
        <label for="body">Body</label>
        <input type="text" name="body" id="body">
        <select name="category" id="category">
            @foreach ($categories as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
</head>
<body>
    @if ($blogs)
        <table>
            <thead>
                <th>Title</th>
                <th>Category</th>
                <th>Created</th>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->category->name }}</td>
                        <td>{{ $blog->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $blogs->links() }}
    @endif
</body>
</html>
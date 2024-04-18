<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News List</title>
</head>

<body>

    <form action="{{ route('news.update', $news->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="news__name">Name
            <input name="News Name" id="news__name" value="{{ $news->name }}">
        </label>
        <label for="news__shortdesc">Short Description
            <input name="Short Description" id="news__shortdesc" value="{{ $news->shortdesc }}">
        </label>
        <label for="news__content">Content
            <input name="News Content" id="news__content" value="{{ $news->content }}">
        </label>
        <label for="news__author">Author
            <input name="News Author" id="news__author" value="{{ $news->author }}">
        </label>
        <input type="submit" value="Edit">
    </form>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News List</title>
</head>

<body>
    <div>
        @isset($news)
            <section>
                <div class="container">
                    <h2>Список новостей:</h2>
                    @foreach ($news as $elem)
                        <a href="{{ route('news.show', $elem->id) }}">
                            <h2>{{ $elem->name }}</h2>
                        </a>
                        <p>{{ $elem->shortdesc }}</p>
                        <p>{{ $elem->created_at }}</p>
                        <p><small>{{ $elem->author }}</small></p>
                        [<a href="{{ route('news.edit', $elem->id) }}"><strong>Edit News</strong></a>]
                    @endforeach
                </div>
            </section>
        @endisset

    </div>
</body>

</html>

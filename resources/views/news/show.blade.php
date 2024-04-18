<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News List</title>
</head>

<body>

    <section>
        <div class="container">
            <article id="news-id-{{ $news->id }}">
                <h1> {{ $news->name }} </h1>
                <p> {{ $news->content }} </p>
                <h5> {{ $news->author }} </h5>
            </article>
        </div>
    </section>

</body>

</html>

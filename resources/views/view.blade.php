<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>検索結果{{$district->district_name}}</title>
       <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet" >
    </head>
    <body>
       <h1>危険区域</h1>
       <div class='reviews'>
             @foreach ($reviews as $review)
            <div class='review'>
                <h2 class='body'>{{ $review->body }}</h2>
                <p class='危険度'>{{ $review->danger }}</p>
            </div>
            @endforeach
        </div>
       <div class='paginate'>
            {{ $reviews->links() }}
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>危険区域の作成</title>
        
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet" >
    </head>
    <body>
        <h1>危険区域の作成</h1>
        <form action="/view" method="POST">
            @csrf
            <div class="body">
                <h2>地域の名前</h2>
                 <textarea name="review[body]" placeholder="横浜市○○区以下おおよその場所"></textarea>
            </div>
            <h2>区の名前</h2>
            <div class="district_name">
                 <select name="review[district_id]" >
                   @foreach($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->district_name }}</option>
                   @endforeach
                 </select>
            </div>
            <div class="danger">
                <h2>危険度</h2>
                <input type="text" name="review[danger]" placeholder="1~5で選択肢してください"/>
            </div>
            <input type="submit" value="作成"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
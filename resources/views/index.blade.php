<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>みんなで作るハザードマップ</title>
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet" >
    </head>
    <x-app-layout>
    <body>
        <h1 class="title">みんなで作るハザードマップ</h1>
        
        <div class='header'>
            <ul class="header-list">
                <li class='header-li'>ログイン</li>
                <li class='header-li'><a href='/use'>使い方</a></li>
                <li class='header-li'><a href='/terms'>利用規約</a></li>
            </ul>
        </div>
        
        <div class='main'>
            <div class='header-search'>
              <h2>ハザードマップの検索</h2>
                  <div class="category">
                   <h3>選択肢：区</h3>
                    <div class="seach">
                         
                        <form action= "/view/get" method="POST">
                            @csrf
                            
                              <select name ="district[district_name]" >
                                  @foreach($districts as $district)
                                  <option value="{{ $district->district_id}}">{{$district->district_name}}</option>
                                  @endforeach
                              </select>
                              
                                     <div>
                                       <input type='submit' class-"btn" value="検索">
                                     </div>
                        </form>
                         
                    </div>
                 </div>
            </div>
            
            
            <div class='header-make'>
                <h2>危険区域の作成</h2>
                <ul>
                  <li class='main-li'>選択肢：市</li>
                  <li class='main-li'>選択肢：区</li>  
                </ul>
                <button type='button'>この条件で作成</button>
            </div>
        </div>
        
        <div class='footer'>
            <h3 class='question'>お問い合わせ</h3>
        </div>
    </x-app-layout>
    </body>
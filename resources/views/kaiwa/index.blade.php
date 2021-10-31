<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('無言が続く場合') }}
    </h2>
  </x-slot>
  <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/views.css')}}">
    </head>
<body>
  <h1>どのような話を希望ですか？</h1>

  <div class="f-container">
    <p1><a href="http://localhost/cat"class="btn btn-border-shadow btn-border-shadow--color2">すべるお話</a><p1>
    <p2><a href="http://localhost/nagomu"class="btn btn-border-shadow btn-border-shadow--color2">場の空気が和むお話</a><p2>
    <p3><a href="http://localhost/sekens"class="btn btn-border-shadow btn-border-shadow--color2">世間話</a><p3>
    <p4><a href="http://localhost/warai"class="btn btn-border-shadow btn-border-shadow--color2">笑いをとるお話</a><p4>
  </div>
  
</body>
</html>
</x-app-layout>
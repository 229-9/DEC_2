<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('あなたにおすすめの世間話は') }}
    </h2>
  </x-slot>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/views.css')}}">
    </head>
<body>
<h3>{{ $contents }}</h3>
</form>
</body>
</html>
</x-app-layout>


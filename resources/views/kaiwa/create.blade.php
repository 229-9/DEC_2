<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    <link rel="stylesheet" href="{{asset('css/views.css')}}">
      {{ __('相手の話を遮る場合') }}
    </h2>
  </x-slot>
<h3>{{ $contents }}</h3>
</x-app-layout>


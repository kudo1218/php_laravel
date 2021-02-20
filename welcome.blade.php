@php
  $text = $_POST['text'];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>課題①-1</title>

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
      <h1>日本の首都は？</h1>

      <form method="post">
        @csrf
        <input type="text" name="text"><input type="submit" value="OK">
      </form>

      @if($text == "東京")
      <p>正解</p>
      ＠else
      <p>不正解</p>
      @endif
    </body>
</html>
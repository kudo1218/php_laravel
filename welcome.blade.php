<?php
  if(!empty($_POST['text'])) {
    $text = $_POST['text'];

    if($text == "東京") {
      $message = "正解";
    }else{
      $message = "不正解";
    }
  }
?>
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

      <form action="welcome.blade.php" method="post">
        <input type="text" name="text"><input type="submit" value="OK">
      </form>

      <?php echo $message ?>
    </body>
</html>

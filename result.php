<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>課題①-1</title>
</head>
<body>
  <h1>日本の首都は？</h1>

  <form action="result" method="get">
    <input type="text" name="text"><input type="submit" value="OK">
  </form>
  <?php
    if($result == '東京') {
      $msg = '正解';
    }else{
      $msg = '不正解';
    }
  ?>
  </body>
  <p><?php echo $msg; ?></p>
</html>

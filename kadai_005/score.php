<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>課題005</title>
</head>

<body>
  <?php
  // 変数に値を代入する
  $score1 = '80';
  $score2 = '60';
  $score3 = '55';
  $score4 = '40';
  $score5 = '100';
  $score6 = '25';
  $score7 = '80';
  $score8 = '95';
  $score9 = '30';
  $score10 = '60';

  // 合計
  $class_total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 ;

  // 平均点
  $average_score = $class_total / 10 ;

  echo $average_score ;
  ?>
</body>

</html>
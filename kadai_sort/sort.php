<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 独自のソート関数を呼び出す
        function sort_2way($array , $order) {
          if($order){
             echo '昇順にソートします。';
             sort($array);
          } else {
            echo '降順にソートします。';
            rsort($array);
          }
          echo '<br>';
          foreach ($array as $val) {
            echo $val;
            echo '<br>';
          }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 関数の呼び出し方
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
       ?>
    </p>
</body>

</html>
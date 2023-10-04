<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>課題16</title>
</head>
<body>
  <?php
  //クラスを定義する
  class Food{
  //プロパティを定義する
    private $name;
    public $price;

    //メソッドを定義する
    public function show_price() {
      echo $this->price . '<br>';
    }

    //コンストラクタを定義する
    public function __construct(string $name, string $price ){
      $this->name = $name;
      $this->price = $price;
    }
  }

  class Animal {
    private $name;
    public $height;
    private $weight;

    //メソッドを定義する
    public function show_height() {
      echo $this->height;
    }

    //コンストラクタを定義する
    public function __construct(string $name, string $height, string $weight){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
  }

  //インスタンス化する
  $potato = new Food('potato', '250');
  $dog = new Animal('dog', '60', '5000');

  //インスタンスそれぞれの値を出力する
  print_r($potato);
  echo '<br>';
  print_r($dog);
  echo '<br>';
  
  //メソッドにアクセスして実行する
  $potato->show_price ();
  $dog->show_height ();
  ?>
</body>
</html>
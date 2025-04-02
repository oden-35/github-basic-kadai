<?php
class Food {
  private $name;
  private $price;

  // コンストラクタでプロパティに値を代入
  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price = $price;
  }

  // priceを出力するメソッド
  public function show_price(): int {
    return $this->price;
  }

  // オブジェクトの情報を表示するメソッド
  public function __toString(): string {
    return "Food Object ( [name:Food:private] => {$this->name} [price:Food:private] => {$this->price} )<br>";
  }
}

$food = new Food('potato', 250);
echo $food;  // Foodオブジェクトの表示

class Animal {
  private $name;
  private $height;
  private $weight;

  // コンストラクタでプロパティに値を代入
  public function __construct(string $name, int $height, int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  // heightを出力するメソッド
  public function show_height(): int {
    return $this->height;
  }

  // オブジェクトの情報を表示するメソッド
  public function __toString(): string {
    return "Animal Object ( [name:Animal:private] => {$this->name} [height:Animal:private] => {$this->height} [weight:Animal:private] => {$this->weight} )<br>";
  }
}

$animal = new Animal('dog', 60, 5000);
echo $animal;  // Animalオブジェクトの表示

// show_price()とshow_height()メソッドを使用して値を出力
echo $food->show_price() . "<br>";  // Foodオブジェクトのpriceを表示
echo $animal->show_height() . "<br>";  // Animalオブジェクトのheightを表示
?>




<?php
    class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL
    $f = new Car("red", "Volvo");
    include __DIR__ . '/../rozwiazania/zadanie5.php';
    echo '<script>if(document.querySelector("#zadanie5 .solution-container").innerText.replaceAll("\\n", " ") === \'array(1) { [0]=> int(5) } array(1) { [0]=> float(5.34) } array(1) { [0]=> string(5) "hello" } array(1) { [0]=> bool(true) } array(0) { } array(2) { ["color"]=> string(3) "red" ["model"]=> string(5) "Volvo" }\') { progress[4] = 1; }</script>';
?>
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
    echo '<script>if(document.querySelector("#zadanie5 .solution-container").innerText.replaceAll("\\n", " ") === \'object(stdClass)#2 (1) { ["scalar"]=> int(5) } object(stdClass)#3 (1) { ["scalar"]=> float(5.34) } object(stdClass)#4 (1) { ["scalar"]=> string(5) "hello" } object(stdClass)#5 (1) { ["scalar"]=> bool(true) } object(stdClass)#6 (0) { } object(Car)#1 (2) { ["color"]=> string(3) "red" ["model"]=> string(5) "Volvo" }\') { progress[4] = 1; }</script>';
?>
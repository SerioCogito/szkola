<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        // Int
        $x = 5324;
        echo '<pre>';               //echo '<pre>' to taki ENTER w PHP
        var_dump($x);
        echo '<pre>';
        //Float
        $y = 10.435;
        echo '<pre>';
        var_dump($y);
        echo '<pre>';

        // Bool
        $z = true;
        echo '<pre>';
        var_dump($z);
        echo '<pre>';

        // tablice
        $auta = array("Volvo","BMW","Audi");
        echo '<pre>';
        var_dump($auta);
        echo '<pre>';

        // Obiekty
        class Car{
            public $color;
            public $model;
            public function __construct($color, $model){
                $this->color = $color;
                $this->model = $model;
        }
        public function message(){
            return "my car is a " . $this->color ."". $this->model ."";

        }      
        }
        $car = new Car("red","Volvo");
        echo '<pre>';
        var_dump($car);
        echo '<pre>';

        // Null
        $h = "witaj swiecie";
        $h = null;
        echo '<pre>';
        var_dump($h);
        echo '<pre>';

        // Zmiana typu danych
        $t = 9;
        echo '<pre>';
        var_dump($t);
        echo '<pre>';

        $r = "hello";
        echo '<pre>';
        var_dump($r);
        echo '<pre>';
        ?>
</body>
</html>
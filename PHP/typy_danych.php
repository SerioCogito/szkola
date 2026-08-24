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
        var_dump($x);

        //Float
        $y = 10.435;
        var_dump($y);

        // Bool
        $z = true;
        var_dump($z);

        // tablice
        $auta = array("Volvo","BMW","Audi");
        var_dump($auta);

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
        var_dump($car);
        ?>
</body>
</html>
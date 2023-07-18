<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h4>hello php</h4>";

        $a=45; //integer
        $b="hello"; //string
        $c=23.67;   //float
        $d = true;  //boolean
        $cars = array("Volvo","BMW","Toyota");  //array

        class Car {            //object
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
          $myCar = new Car("black", "Volvo");

          $x = null;  //null

          echo "Data types -<br>";
          echo "INTEGER- ".$a."<br>STRING- ".$b."<br>FLOAT- ".$c."<br>BOOLEAN- ".$d."<br>ARRAY- ";
          foreach ($cars as $value) {
            echo $value.",";
          }
          echo "<BR>OBJECT- ".$myCar -> message();

          echo "<br><br>if else - ";
          $age=19;
          if($age>18)
          {
              echo "<br>you are adult!";
          }
          else{
              echo "<br>you are child!";
          }

          echo "<br><br>loops -";
          echo "<br>While loop: <br>";
          $l=0;
          while($l<6){
              echo "the number is ".$l."<br>";
              $l++;
          }


          echo "<br>do while loop:";
          $w=1;
          do{
              echo "<br>hello world !";
            $w++;
          }while($w<5);

          echo "<br><br>for loop:";
          for($f=5 ; $f>0 ; $f--)
          {
              echo $f."<br>";
          }

          echo "<br><br>for each loop:";
          $nums = array("22","33","44");
          foreach($nums as $value)
          {
              echo $value."<br>";
          }
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
    <?php
    echo "hello world";
    //single line comment
    /*multiple line commnent
    another line commnet
    */
    $txt1="Learn PHP";
    $txt2="Hello there";
    echo "<h2>$txt1</h2>"; 
    $txt ="Hello world!";
    $x =5;
    $y =10.5;
    echo"I love ". $txt ."!";
    echo "<br>";
    echo$x + $y;
    echo "<br>";
    $cars=array("volvo","BMW","Toyota");
    var_dump($cars);

    echo"<br>";

    $car=array("brand"=>"Ford","model"=>"Mustang","Year"=>1964);
    echo $car["model"];

    foreach($car as $x=>$y){
        echo "$x: $y <br>";
    }
    echo"<br>";

    class Fruit{
        public $name;

        function set_name($name){
            $this->name=$name;
        }

        function get_name(){
            return $this->name;
        }
    }

        $apple = new Fruit();
        $apple->set_name('Apple');
        echo $apple->get_name();
    


    ?>
</body>
</html>
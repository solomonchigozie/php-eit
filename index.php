<?php 
//php code comes in here
$text = "its tueesday";
$x = 200000;
$c = 30.3434;
$e = true;
$f = false;

$arr = array('hp', 'dell', 'mac'); //array
$arr2 = ['hp', 'dell', 'mac']; //array

class User{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function info(){
        return " hi my name is ". $this->name;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $text; ?></h1>
    <p>Variable x is <?php print $x; ?></p>

    <?php 
        $user = new User("john");
        echo $user->info();

        //show array
        print_r($arr);

        $d = null;

        function classing($n1, $n2){
            $sum = $n1 + $n2;
            return $sum;
        }

        classing(20, 60);

        function userprofile($firtn, $lastn){
            $fn = $firtn . $lastn;
            return $fn;
        }

        userprofile("john","mark");

        echo strlen("my name is john") . "<br>";

        $word = "Hello i am john doe";
        echo str_replace("john", "mike", $word);

        $z = 6.93489;

        echo is_int($z);
        echo is_float($z);


        $zz = "5";
        $cast_zz = (int)$zz;

        print  "check = " . is_int($cast_zz);

        $num1 = 30;
        $num2 = 20;

        print $num1 + $num2;
        echo $num1 < $num2;

        var_dump($num1 > $num2);
        // +, -, /, *, %, **
        /*  
        comaparison =      ===,==, <= , >= , < , >, != 
        

        =
        += 
        -=
        *=
        /=
        $a = 12;
        $a += 7;

        $a = $a +7;

        $a++ ;
        $a--;
        
        logical     =  && , ||


        string = concatenation (.)

        decr & incr ++, -- etc

        conditional =       ?:

        */

        $n = 1;
        echo $n = ($n==1) ? "Correct" : "Wrong Answer";


        //conditionals

        $color = "red";

        if($color == "red"){
            echo "Its a red color";
        }else{
            echo "What color is this";
        }


        $userName = "john";

        if($userName == "mike"){
            echo "You are welcome cadet";
        }elseif($userName == "john"){
            echo "You are welcome john wick";
        }else{
            echo "Who are you?";
        }

        //switch
        // y Y mM Dd Hh Ii Ss  
        // echo Date('Y/D/M H:i:s');
        $day = Date('d');
        switch($day){
            case 0:
                echo "Its sunday";
                break;
            case 1:
                echo "its monday";
                break;
            case 2:
                echo "Its Tuesday";
                break;
            default:
                echo "Invalid date";
        }


        //loops (while loop, do while, for loop, foreach)

        
        $kk = 1;
        do{
            echo $kk . ", ";
            $kk++;
        }while($kk < 20);



        $k  =1;
        while($k < 10){
            echo $k . ",";
            $k++;
        }

        for($j=1; $j <=10; $j++){
            echo $j . ", ";
        }

        //foreach(looping through arrays)

        $carsArray = ["bmw","mercedez","toyota","volvo"];
        foreach($carsArray as $car){
            echo "I love $car <br>";
        }

        echo $carsArray[0];

        //Arrays (index array, associative array, multidimensional
        //al array)

        $userArray = ["name"=>"john", "age"=>20,"color"=>"black"];
        echo $userArray["age"];

        //loop through associative array
        foreach($userArray as $key => $value){
            echo "$key = $value <br>";
        }

        //multidimensional array
        $items = array(
            array("ball","pencil"), 
            array("shoe", "clothes"),
            array("bottle", "stick")
        );

        echo $items[0][0];

        $pcArray = [
            'hp'=>[
                "model"=>"hp 250 g5", "color"=>
                    ["blue", "black", "red"]
            ],
            'mac'=>[
                "model"=>"2015", "color"=>['red','blue']
            ]
        ];
        echo $pcArray['hp']['model'];

        function sumNumbers($num1, $num2){
            $sum = $num1 + $num2;
            return $sum;
        }

        echo sumNumbers(30, 10);


        
        //GLOBALS
        /**
         * $_SERVER
         * $_COOKIE
         * $_SESSION
         * $_POST
         * $_GET
         * 
         */

         echo $_SERVER['SERVER_ADDR'] .'<br>';
         echo $_SERVER['HTTP_HOST']. '<br>';
         echo $_SERVER['HTTP_REFERER'] . "<br>"; 
         echo $_SERVER['PHP_SELF'];
         
    ?>
</body>
</html>
<?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i=1; $i<=50; $i++){
    if($i%3==0 && $i%5==0){
        echo $FizzBuzz . " ";
    }
    elseif($i%5==0){
        echo $Buzz . " ";
    }
    elseif($i%3==0){
        echo $Fizz . " ";
    }
    else{
        echo $i . " ";
    }
}

// cd /Users/mnm_tmur/coachtech/self-study/php
// php -S localhost:8000
// http://localhost:8000/index06.php
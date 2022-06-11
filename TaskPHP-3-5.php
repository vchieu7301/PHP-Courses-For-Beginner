<?php

$a=1;

while($a<101){
        if($a%3==0 && $a%5==0)
        {
            echo 'Fizz Bizz<br>';
        }
        else if($a%3==0)
        {
            echo 'Fizz<br>';
        }
        else if($a%5==0)
        {
            echo 'Bizz<br>';
        }else{
            echo "$a<br>";
        }
        $a++;
    }

?>
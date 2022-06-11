<?php



$season = array (1,2,3,4,5,6,7,8,9,10);


foreach ($season as $element) {
    echo "<script type='text/javascript'>alert('$element');</script>";
}
$a = 0;
$t=0;

while($a < 11){
    if($a%2!=0){
        echo"<script type='text/javascript'>alert('$a');</script>";
        $a++;
        continue;
    }
    $a++;
}
$a=0;
while($a<11){
    $t+=$a;
    $a++;
}
echo $t;

// while(true){
//     if($a<11){
//         if($a%2!=0){
//             echo"<script type='text/javascript'>alert('$a');</script>";
//             $a++;
//         }
//         break;
//     }
    
// }

?>
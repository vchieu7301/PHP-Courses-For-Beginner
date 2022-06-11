<!DOCTYPE html>
<head>
</head>
<body>
<?php

$a = 1;
$b = 2;
$c = 3;
$d = 4;
$e = 5;

$kq1 = "Đáp án";
$kq2 = "Đáp án";
$kq3 = "Đáp án";
$kq4 = "Đáp án";
$kq5 = "Đáp án";

if(isset($_GET['submit'])){

    $kq1 = $a + $a;
    $kq2 = $a + $b;
    $kq3 = $c * $c;
    $kq4 = $d / $b;
    $kq5 = $e / $b;
}
if (isset($_GET['clear'])) {
    $kq1 = "Đáp án";
    $kq2 = "Đáp án";
    $kq3 = "Đáp án";
    $kq4 = "Đáp án";
    $kq5 = "Đáp án";
}
?>
<form method="get" action="TaskPHP-3-1.php">
<input type="text" name="pt1" value="<?=$a?>+<?=$a?>">
<input type="text" name="kq1" value="<?php echo $kq1?>"><br>
<input type="text" name="pt2" value="<?=$a?>+<?=$b?>">
<input type="text" name="kq2" value="<?php echo $kq2?>"><br>
<input type="text" name="pt3" value="<?=$c?>*<?=$c?>">
<input type="text" name="kq3" value="<?php echo $kq3?>"><br>
<input type="text" name="pt4" value="<?=$d?>/<?=$b?>">
<input type="text" name="kq4" value="<?php echo $kq4?>"><br>
<input type="text" name="pt5" value="<?=$e?>/<?=$b?>">
<input type="text" name="kq5" value="<?php echo $kq5?>"><br>
<input type="submit" name="submit" value="Tính">
<input type="submit" name="clear" value="Clear">
</form>  

</body>
</html>
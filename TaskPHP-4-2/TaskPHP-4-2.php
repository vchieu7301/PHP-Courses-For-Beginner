<!DOCTYPE html>
<html>
<body>
    <form method="get" action="TaskPHP-4-2.php">
        <input type="text" name="name" value="">
        <input type="submit" name="submit" value="Hiển thị">
    </form>
<?php
include 'Person-09.php';
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $hello = new Person09();
    echo $hello->hello($name);
}
 
?>
</body>
</html>

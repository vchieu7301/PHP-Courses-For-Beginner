<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form method="get" action="TaskPHP-3-3.php">
            <input type="text" name="num1" value="">
            <input type="text" name="num2" value=""><br>
            <input type="submit" name="submit" value="Report">
        </form>
        <?php

        $mang=array(
            array("Tròn","X","Tròn","x","Tam Giác"),
            array("X","Tròn","X","Tam Giác","X",),
            array("Tròn","Vuông","Tròn","Vuông","Tam Giác"),
            array("Vuông","Tròn","Vuông","Tam Giác","Vuông"),
        );
        


        if(isset($_GET['submit'])){
        
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            echo "<script type='text/javascript'>alert('Hình ".$mang[$result1-1][$result2-1]."');</script>";

        }

        ?>
    </body>
</html>
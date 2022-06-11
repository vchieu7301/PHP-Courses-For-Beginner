<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form method="get" action="TaskPHP-3-2-2.php">
            <input type="text" name="num1" value="">
            <input type="text" name="num2" value=""><br>
            <input type="submit" name="submit" value="Report">
        </form>
        <?php
        if(isset($_GET['submit']))
        {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $result3 = ".";

            if(strpos($result1,$result3) !== false && strpos($result2,$result3) !== false)
            {
                if( $result1<$result2) {
                    echo "<script type='text/javascript'>alert('".$result1." bé hơn ".$result2."');</script>";
                }else if( $result1>$result2) {
                    echo "<script type='text/javascript'>alert('".$result1." lớn hơn ".$result2."');</script>";
                }else{
                    echo "Có cùng giá trị";
                }
            }else{
                echo "giá trị không hợp lệ";
            }         
        }
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form method="get" action="TaskPHP-3-4-2.php">
            <input type="text" name="num1" value="">
            <input type="text" name="num2" value=""><br>
            <input type="submit" name="submit" value="Actions">
        </form>

        <?php
        $mang = array();
        if(isset($_GET['submit'])){
        
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        
        array_push($mang,$result1,$result2);

        foreach ($mang as $element) {
            echo "<script type='text/javascript'>alert('các giá trị được thêm: $element');</script>";
        }
        $t=0;
        foreach($mang as $element){
            $t+=$element;
        }    
        echo "<script type='text/javascript'>alert( 'Tổng của 2 giá trị là: $t');</script>";

        while(true){
            if($element%2==0){
                echo "<script type='text/javascript'>alert('Các số chẵn gồm: $element , ');</script>";
            }
            break;
        }
    }
        ?>
    </body>
</html>
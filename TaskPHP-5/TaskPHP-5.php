<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
   
    
    <?php
    $name="";
    $address="";
    $tell="";
    if(isset($_GET['submit']))
    {
        $open = fopen('CSV.csv','w+')or die('Error 404');
        $name = $_GET['name'];
        $address = $_GET['address'];
        $tell = $_GET['tell'];
        $mang = array($name,$address,$tell);
        array_push($mang,$name,$address,$tell);
        fputcsv($open,$mang);
        echo "<script type='text/javascript'>alert('Nhập dữ liệu thành công !!');</script>";
        fclose($open);

    }
    if(isset($_GET['load'])){
        $open = fopen('CSV.csv','r+')or die('Error 404');
        $load = fgetcsv($open);
        $name = $load[0];
        $address = $load[1];
        $tell = $load[2];
        fclose($open);
    }
    ?>
     <form method="get" action="TaskPHP-5.php">
        tên:<br>
        <input type="text" name="name" <?php echo 'value="'.$name.'"'; ?>> <br>
        địa chỉ:<br>
        <input type="text" name="address" <?php echo 'value="'.$address.'"'; ?>><br>
        số điện thoại:<br>    
        <input type="number" name="tell" <?php echo 'value="'.$tell.'"'; ?>><br><br>
        <input type="submit" name="submit" value="Write">
        <input type="submit" name="load" value="Load">
    </form>
    </body>
</html>
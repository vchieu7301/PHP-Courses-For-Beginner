<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
   
    
    <?php
    $mang = array();
    $name="";
    $address="";
    $tell="";
    $f_name='CSV.csv';
    $path=realpath($f_name);
    if(isset($_GET['submit']))
    {
        $path = $_GET['path'];
        $open = fopen($path,'w+')or die('Error 404');
        $name = $_GET['name'];
        $address = $_GET['address'];
        $tell = $_GET['tell'];

        array_push($mang,$name,$address,$tell);
        fputcsv($open,$mang);
        echo "<script type='text/javascript'>alert('Nhập dữ liệu thành công !!');</script>";
        fclose($open);
    }
    if(isset($_GET['load'])){
        $open = fopen($path,'r+')or die('Error 404');
        $load = fgetcsv($open);
        $name = $load[0];
        $address = $load[1];
        $tell = $load[2];
        fclose($open);
    }
   
    ?>
     <form method="get" action="TaskPHP-6.php">
        tên:<br>
        <input type="text" name="name" <?php echo 'value="'.$name.'"'; ?>> <br>
        địa chỉ:<br>
        <input type="text" name="address" <?php echo 'value="'.$address.'"'; ?>><br>
        số điện thoại:<br>    
        <input type="number" name="tell" <?php echo 'value="'.$tell.'"'; ?>><br>
        File Path:<br>
        <input type="text" name="path" <?php echo 'value="'.$path.'"'; ?>><br><br>

        <input type="submit" name="submit" value="Write">
        <input type="submit" name="load" value="Load">
        <input type="submit" name="open" value="Open">
    </form>
    </body>
</html>
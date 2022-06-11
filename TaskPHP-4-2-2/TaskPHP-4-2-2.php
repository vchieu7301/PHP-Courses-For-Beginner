<!DOCTYPE html>
<html>
<body>


        Các thông tin có thể làm biến thành viên là :<br>
         staff_number, name, address, birthday, dayjoin <br>
        Vì các biến đó là những cái cố định, dễ dàng nhập vào bởi người dùng<br><br>
        
        Các thông tin không phù hợp làm biến thành viên là:<br>
        age, years vì đây là các thông tin không cố định<br>
        Các thông tin này là những cái chúng ta có thể nhận được sau khi xử lý các biến thành viên<br>
    <form method="get" action="TaskPHP-4-2-2.php">
        staffnumber:<br>
        <input type="text" name="staffnumber" value=""><br>
        name:<br>
        <input type="text" name="name" value=""><br>
        address:<br>
        <input type="text" name="address" value=""><br>
        birthday:<br>
        <input type="text" name="birthday" value=""><br>
        day join:<br>
        <input type="text" name="dayjoin" value=""><br><br>
        <input type="submit" name="submit" value="Nhập">
        <br>
    </form>
<?php
include 'Person-10.php';
if(isset($_GET['submit'])){
    $staffnumber = $_GET['staffnumber'];
    $name = $_GET['name'];
    $address = $_GET['address'];
    $birthday = $_GET['birthday'];
    $dayjoin = $_GET['dayjoin'];

    $hello = new Person10();
    $age = new Person10();
    $years = new Person10();
    echo $hello->hello($staffnumber,$name,$address,$birthday,$dayjoin);
    echo 'Tuổi: '.$age->get_age($birthday).' <br>';
    echo 'Năm công tác: '.$years->get_years($dayjoin).' <br>';
}
 
?>
</body>
</html>

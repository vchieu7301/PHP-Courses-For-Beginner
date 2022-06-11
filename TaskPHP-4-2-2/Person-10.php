<?php
class Person10{
    public $staffnumber;
    public $name;
    public $address;
    public $birthday;
    public $dayjoin;
    public $age;
    public $years;

   
    function get_staffnumber(){
        return $this->staffnumber;
    }
    function get_name(){
        return $this->name;
    }
    function get_address(){
        return $this->address;
    }
    function get_birthday(){
        return $this->birthday;
    }
    function get_dayjoin(){
        return $this->dayjoin;
    }
    function get_age($birthday){
        $diff = date_diff(date_create(), date_create($birthday));
		$age = $diff->format('%Y');
		return $age;
    }
    function get_years($dayjoin){
        $diff = date_diff(date_create(), date_create($dayjoin));
		$years = $diff->format('%Y');
        return $years;
    }
    

    function set_staffnumber($staffnumber){
        $this->$staffnumber;
    }
    function set_name($name){
        $this->$name;
    }
    function set_address($address){
        $this->$address;
    }
    function set_birthday($birthday){
        $this->$birthday;
    }
    function set_dayjoin($dayjoin){
        $this->$dayjoin;
    }

    function hello($staffnumber,$name,$address,$birthday,$dayjoin){
        echo 'Chào bạn, <br> nhân viên số: '.$staffnumber.'<br>';
        echo 'Tên: '.$name.'<br>';
        echo ' Địa chỉ: '.$address.'<br>';
        echo 'Năm sinh: '.$birthday.'<br>';
        echo 'Ngày vào cty: '.$dayjoin.'<br>';
        
      }
}
?>
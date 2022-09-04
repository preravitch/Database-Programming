<?php
class Class_name{
    var $student_name;
    var $image;
    var $gender;


    function display(){
        echo "<h1> This is Our Website with Gender Detection</h1><br>";
        echo "<img src=".$this->image," ","alt=","Digital"," ","width="," ","480"," ","height="," ","270","><br>";
        echo "<h3>",$this->student_name.",".$this->gender,"<h3>";
    }
}

$mine= new Class_name();
$mine->image="https://work360.in.th/wp-content/uploads/2019/02/mark-zuckerberg.jpg";
$mine->student_name="Mark Zuckerberg";
$mine->gender="Male";

echo $mine->display();
?>
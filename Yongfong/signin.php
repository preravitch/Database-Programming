<?php
$mysqli = new mysqli('localhost','root','','yong');
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            

            $q="SELECT Username,Password FROM user WHERE (Username LIKE '$email' and Password LIKE '$pass');";
            if($result=$mysqli->query($q)){
                if($row=$result->fetch_array()){
      
                    
                    header("location: index.html");
                } else{
                    echo "<p style='font-weight: bold; color: red; margin: 0; font-size: 15px'>Log in failed</p>";
                }
            } else {
                echo "fail connection";
            }
        }
        ?>
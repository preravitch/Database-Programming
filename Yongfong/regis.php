<?php
    
            if(isset($_POST['submit'])){
                $mysqli = new mysqli('localhost','root','','yong');
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cpass = $_POST['cpass'];
                
              
                if($pass!=$cpass){
                    echo "<p style='font-weight: bold; color: red; margin: 0; font-size: 15px'>Password not matched</p>";
                } else {
                $q="INSERT INTO user(Username, Password) 
                VALUES ('$email','$pass');";
                if($mysqli->query($q)){
                  echo "<p style='font-weight: bold; color: blue; margin: 0; font-size: 15px'>Sign-up complete</p>";
                  header("location: login.php");
              }
            }
        }
        
    
        
    ?>
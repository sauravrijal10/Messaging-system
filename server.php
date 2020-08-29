<?php
    session_start();
    $conn=mysqli_connect("localhost", "root", "", "messaging");
    if(isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        if($password==$cpassword){
            $conn=mysqli_connect("localhost", "root", "", "messaging");
            if(!$conn){
                die ("connection failed".mysqli_connection_error());
            }
            else{
                $query="SELECT * From users WHERE username='$username'";
                $result=mysqli_query($conn, $query);
                $resultcheck=mysqli_num_rows($result);
                if($resultcheck>0){
                    echo "username exist";
                }
                else{
                    $query="INSERT INTO  users(firstname, lastname, username, password) VALUES('$firstname', '$lastname', '$username', '$password')";
                    $result=mysqli_query($conn, $query);
                    if($result){
                        echo "you are registered successfully";
                    }
                    else{
                        echo "failed";
                    }
                }
            }
        }
        else{
            echo "your password do not match";
        }
    }
    if(isset($_POST['login'])){
        $_SESSION["user_name"]=$_POST['user_name'];
        $pass_word=$_POST['pass_word'];
        $conn=mysqli_connect("localhost", "root", "", "messaging");
        $q="SELECT * from users WHERE username='".$_POST["user_name"]."'";
        $result=mysqli_query($conn, $q);
        $check=mysqli_fetch_assoc($result);
        if($check['password']==$pass_word){
            $_SESSION['id']=$check['id'];
            $_SESSION['firstname']=$check['firstname'];
            $_SESSION['lastname']=$check['lastname'];
            header("location:main.php");
        }
        else{
            echo "failed";
        }
    }
?>
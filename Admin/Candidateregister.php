<?php
include("connect.php");
$name = $_POST['Name'];
$mobile = $_POST['Mobile'];
$password= $_POST['Password'];
$cpassword = $_POST['cpassword'];
$atext = $_POST['atext'];
$email =$_POST['email'];
$Registration =$_POST['Registration'];
$image = $_FILES ['photo']['name'];
$tmp_name= $_FILES['photo']['tmp_name'];
$role = $_POST['role'];



if($password == $cpassword)
{
    move_uploaded_file($tmp_name,".././uploads_profile_pic/$image");
    $insert = mysqli_query($connect, "INSERT INTO users (name,mobile,password,address,email,registrationnum,photo,role,status,votes) VALUES('$name','$mobile','$password','$atext','$email','$Registration','$image','$role','0','0')");
    if($insert)
    {
        echo '<script>
        alert("Candidate Registration Successfully");
        window.location = "admin_dashboard.php";
        </script>';
    }
    else
    {
        echo '<script>
        alert("Registration Having Error");
        window.location = "admin_dashboard.php#Candidate";
        </script>';
    }
}
else
{
    echo '<script>
    alert("Password Not match");
    window.location = "admin_dashboard.php#Candidate";
    </script>';
}
?>
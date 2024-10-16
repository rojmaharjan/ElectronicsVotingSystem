<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile = $_POST['Mobile'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $check = mysqli_query($connect, "SELECT * FROM users WHERE Mobile='$mobile' AND password='$password' AND role='$role'");

    if (mysqli_num_rows($check) > 0) {
        $userdata = mysqli_fetch_array($check);
        $groups = mysqli_query($connect, "SELECT * FROM users WHERE role=2");
        $groupesdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] = $groupesdata;

        // Return a success message to the frontend
        echo "success";
    } else {
        // Return an error message to the frontend
        echo "error";
    }
}
?>

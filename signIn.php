<?php
    
    include "db_connect.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT username, password FROM registration WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        echo "<script>alert(' $username مرحبا بك ')</script>";
        include "forum.html";
    }else{
        include "form.html";
        echo "<script>alert('اسم المستخدم أو كلمة السر غير متطابقة, حاول مجددا')</script>";
    }

    mysqli_close($conn);
?>
<?php
    
    include "db_connect.php";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO registration (username, password, email) VALUES ('$username','$password','$email')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('$username تم تسجيل الحساب بنجاح شكرا')</script>";
        include "forum.html";
    } else {
        include "form.html";
        echo "<script>alert('اسم المستخدم أو الايميل مستخدم بالفعل , حاول مرة أخرى')</script>";
    }
        mysqli_close($conn);
?>
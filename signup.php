<?php
    $conn = mysqli_connect("localhost", "root", "", "test");

    $id = $_POST['id'];
    $passwd = md5($_POST['password']);
    $age = $_POST['age'];
    $mbti = $_POST['mbti'];
    $gender = $_POST['gender'];
    
    $sql = "insert into 회원 values";
    $sql = $sql."('{$id}','{$passwd}',$age,'{$mbti}','{$gender}')";

    $result = mysqli_query($conn, $sql);

    if($result){
        mysqli_close($conn);
        echo"<script>location.replace('login.html')</script>";
    }
    else{
        mysqli_close($conn);
    }
?>
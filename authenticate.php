<<<<<<< HEAD
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="nayan" and $password == "123456"){
        echo "Welcome ".$username;
    }else{
        header('location:login.php?error=1');
    }
=======
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="nayan" and $password == "123456"){
        echo "Welcome ".$username;
    }else{
        header('location:login.php?error=1');
    }
>>>>>>> 6dcb466f4919ddb3946a6d4d9160b97d548b566d
?>
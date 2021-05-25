<?php
    session_start();
    $uname=$_POST['uname'];
    $pass=$_POST['psw'];

    $_SESSION['uname']=$uname;
    $_SESSION['psw']=$pass;

    if($uname=='admin' and $pass=='admin')
    {
        header ('location: admin.php');
    }
    else
    {
        session_write_close();
        echo '<script type="text/javascript">'; 
        echo 'alert("Sorry, wrong username or password! ");'; 
        echo 'document.location.href = "index.php";';
        echo '</script>';   
    }

?>

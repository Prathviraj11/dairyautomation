<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname'])&& isset($_POST['password'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
}

$uname =validate($_POST['uname']);
$pass =validate($_POST['password']);

if(empty($uname)){
    header("Location: index.php?error=User name is required");
    exit();
}
else if(empty($pass)){
    header("Location: index.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM userdetails where id=`$uname` AND password=`$pass`";

$result =mysqli_query($conn,$sql);

if(mysqli_num_rows($result)===1){
    $row = mysqli_fetch_assoc($result);
    if($row['id']==$uname && $row['password']===$pass){
        echo "Logged IN!";
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        header("Location : home.php");
        exit();

    }
    else{
        header("Location : index.php?error=Incorrect Username or password");
        exit();
    }

}
else{
    header("Location : index.php");
    exit();
}
<?php
session_start();
$db = new PDO('mysql:host=localhost; dbname=test','root','');
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];    
}
$query = "SELECT * FROM user WHERE username = :username AND password = :password";
$statement = $db->prepare($query);
$statement->execute (
    array (
        'username' => $_POST['username'],
        'password'=> $_POST['password'],
    )
);
$count = $statement->rowCount();
if($count>0){
     echo"login successfully";
    
    $_SESSION['Username']='web';//$statement['username'];
    header("Location: index.php");
    
}else {
    echo"plz enter the current username and password";
}

//$do= $db->prepare("select username,password from user where username = :username and password = :password");
//$do->bindParam(':username',$username);
//$do->bindParam(':password',$password);
//$do->execute();
//$count = $do->rowCount();
//$row = $do->fetch();
//if($count ==1)
//{
//    echo"login successfully";
//}
//else
//{
//    echo"plz enter the current username and password";
//}

 $db= NULL;
?>
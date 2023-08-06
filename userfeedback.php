<?php
$host="localhost:3306";
$username="root";
$password="";
$database="innovatedb";
$conn=mysqli_connect($host,$username,$password,$database);
if ($_SERVER['REQUEST_METHOD']=='POST')
{

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
}

try{
    if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)){
        $sql="INSERT INTO feedback (name,email,phone,message) VALUES (?,?,?,?)";
        $stmt=mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$phone,$message);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location:index.php?success=Your response is recorded");
    }else{
        header("Location:index.php?error=All fields are mandatory");
        exit;
    }

}catch (Exception $exception){

}

?>
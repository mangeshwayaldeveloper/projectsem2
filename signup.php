<?php
require ("register.html");
$host = "localhost:3306";
$username = "root";
$pass= "";
$databasename = "innovatedb";
$conn = mysqli_connect($host, $username, $pass, $databasename);
//if (!$conn) {
//    die("Unable to connect with database");
//} else {
//    echo "sucessfully connected with database";
//}
$name= $_POST['name'];
$email = $_POST['email'];
$url = $_POST['url'];
$password = $_POST['password'];

try {
    if (!empty($name) && !empty($email) && !empty($password)) {
        $sql = "INSERT INTO users (username,email,password,url) VALUES (?, ?,?,?)";
        $stmt=mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$password,$url);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
//        if (mysqli_stmt_affected_rows($stmt)>0) {
//            echo "Data inserted successfully<br>";
//        } else {
//            echo "Error";
//        }
    }else {
        header("Location:php_form.php?error=All fields are mandatory");
        echo "All Fields are required";
        exit;
    }
}catch (Exception $e){
    echo $e->getMessage();
}


//fecthing data
//$sql="SELECT * FROM users";
//$result=$conn->query($sql);
//if ($result->num_rows>0){
//    while($row=$result->fetch_assoc()){
//        $name=$row["username"];
//        $email=$row["email"];
//        $password=$row["password"];
//        $url=$row['url'];
//        echo "<h4>Student Record</h4><br>";
//        echo "Name: " . $name . "<br>";
//        echo "Email: " . $email . "<br>";
//        echo "Password: " . $password. "<br>";
//        echo "Url: " . $url. "<br>";
        echo "<br>";
//    }
//}else{
//
//    echo "no data found";
//
//}
mysqli_close($conn);
?>

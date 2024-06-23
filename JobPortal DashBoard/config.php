<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$conn = mysqli_connect('localhost', 'root', '','jobs');
if($conn -> connect_error){
    die("connection failed:".$conn -> connect_error);
}
echo "";
if(isset($_POST['submit'])){
// get the post records
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['phone_no'];
$password=$_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `users` (`name`, `email`, `phone_no`, `password`) VALUES ('$name', '$email', '$number', '$password')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}else{
    echo "Error:could not able to execute $sql. ".mysqli_error($conn);
}
}
session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    IF(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error='emailid or password is incorrect';
    }
}
if(isset($_POST['post'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $description=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];
    $sqli="INSERT INTO `postjob`(`cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$position','$description','$skills','$CTC')";
    $rd = mysqli_query($conn, $sqli);

    if($rd)
    {
	    header("location:index.php");
    }else{
        echo "Error:could not post $sql. ".mysqli_error($conn);
    }
}
if(isset($_POST['sub'])){
    $jname=$_POST['jname'];
    $apply=$_POST['apply'];
    $qual=$_POST['qualification'];
    $pass=$_POST['passYear'];
    $sqlii="INSERT INTO `candidates`(`jname`, `apply`, `qualification`, `passYear`) VALUES ('$jname','$apply','$qual','$pass')";
    $s=mysqli_query($conn,$sqlii);
}
mysqli_close($conn);
?>
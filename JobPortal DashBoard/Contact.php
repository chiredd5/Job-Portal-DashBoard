<?php include 'header.php' ?>
<div class="container"style="padding-top:100px;">
<h2 style="text-align:center">Contact Us</h2>
    <form method="post"style="margin-left:25%;width:50%;box-shadow:0.5px 0.5px 6px grey;padding:20px;border-radius:10px;margin-top:2%">
  <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cemail">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Comment</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="comment">
  </div>
  <button type="submit" class="btn btn-primary" name="contact">Submit</button>
  <br>
<?php
$conn=mysqli_connect('localhost','root','','jobs');
if($conn -> connect_error){
    die("connection failed:".$conn -> connect_error);
} 
echo "";
if(isset($_POST['contact'])){
    $sname=$_POST['cemail'];
    $com=$_POST['comment'];
    $sql = "INSERT INTO `contact`(`cemail`, `comment`) VALUES ('$sname','$com')";
    $rs = mysqli_query($conn,$sql);
    if($rs)
    {
        echo '<script>alert("response received.we will contact you soon..")</script>';
    }else{
        echo "Error:error occured";
    }
}
mysqli_close($conn);
?>
</form>
</div>
<div style="text-align:center;margin-top:20px">
  <h2>Or Send Message In</h2>
  <div class="fa">
    <a href="https://api.whatsapp.com/send?phone=+918989941234" target="_blank"><i class="fa fa-whatsapp fa fa-3x" aria-hidden="true"></i></a>
		<a href="tel:+918989941234"><i class="fa fa-phone fa fa-3x" aria-hidden="true"></i></a>
		<a href="mailto:alex@gmail.com"><i class="fa fa-envelope-o fa fa-3x" aria-hidden="true"></i></a>
  <div>
</div>
</body>
</html>
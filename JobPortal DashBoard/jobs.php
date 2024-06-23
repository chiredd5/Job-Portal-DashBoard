<?php include 'header.php'?>
<div class="content"style="padding-top:100px">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Year Passout</th>
    </tr>
  </thead>
  <?php 
  $conn = mysqli_connect('localhost', 'root', '','jobs');
  $sql="SELECT `jname`, `apply`,`passYear` FROM `candidates`";
  $result=mysqli_query($conn,$sql);
  $i=0;
  if($result -> num_rows >0){
    while($row=$result->fetch_assoc()){
      echo "
      <tbody>
      <tr>
      <td>".++$i."</td>
      <td>".$row['jname']."</td>
      <td>".$row['apply']."</td>
      <td>".$row['passYear']."
      </tr>";
    }
  }
  else{
    echo "";
  }
  ?>  
  </tbody>
</table>
</div>
</body>
</html>
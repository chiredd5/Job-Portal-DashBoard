<?php include 'header.php'?>
<div class="content">
<p style="margin-top:55px">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="margin-top:10px" >
    Post Job
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form method="post" action="config.php">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="JobDesc" name="jdesc">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="exampleInputSkills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="post">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <?php 
  $conn = mysqli_connect('localhost', 'root', '','jobs');
  $sql="SELECT `cname`, `position`,`CTC` FROM `postjob`";
  $result=mysqli_query($conn,$sql);
  $i=0;
  if($result -> num_rows >0){
    while($row=$result->fetch_assoc()){
      echo "
      <tbody>
      <tr>
      <td>".++$i."</td>
      <td>".$row['cname']."</td>
      <td>".$row['position']."</td>
      <td>".$row['CTC']."
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
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
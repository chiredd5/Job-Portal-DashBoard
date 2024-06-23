<!DOCTYPE html>
<?php include 'config.php' ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Career</title>
  <style>
    .tab{
      padding:10px;
      display:flex;
      flex-wrap:wrap;
      width:100%;
    }
    .tab .jobs{
      width: 420px;
      padding: 10px;
      box-shadow:2px 2px 12px grey;
      padding:10px;
      margin-top:30px;
      border-radius:20px;
    }
    .tab .jobs:hover{
      box-shadow:2px 2px 12px dodgerblue;
    }
  </style>
</head>
<body>
<div class="jumbotron jumbotron-fluid" style="background-image:url('two.jpg');background-size:cover;padding:100px;">
  <div class="container" style="text-align:center;">
    <h1 class="display-4"style="color:white;">Job Portal</h1>
    <p class="lead"style="color:white;">A Smart Choice For Your Career.</p>
  </div>
</div>
<div class="tab">
  <?php
  $conn = mysqli_connect('localhost', 'root', '','jobs');
  $sql="SELECT `cname`, `position`,`jdesc`,`skills`,`CTC` FROM `postjob`";
  $result=mysqli_query($conn,$sql);
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      echo '
      <div class="col-md-4">
      <div class="jobs">
      <h3 style="text-align:center;">'.$rows['position'].'</h3>
      <h4 style="text-align:center;">'.$rows['cname'].'</h4>
      <p style="color:black;text-align:justify;">'.$rows['jdesc'].'</p>
      <p style="color:black;"><b>skills required:</b>'.$rows['skills'].'</p>
      <p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
      <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
      Apply Now
      </button>
      </div>
      </div>';
    }
  }
  ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="jname">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Apply For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qualification">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year Passout</label>
            <input type="text" class="form-control" name="passYear">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="sub">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-image:url(three.jpg);
            background-size:cover;
        }
        .container{
          margin-top:10%;
        }
        .container form{
            margin-top:6em;
            margin-left:20em;
            margin-right:20em;
            padding:30px;
            background-color:white;
            box-shadow:3px 3px 16px black;
            border-radius:10px;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="container">
    <form method="post" action="config.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Submit</button>
  <br>
  <p style="padding-top:20px;">new user?<a href="register.php">click here</a></p>
</form>
    </div>
</body>
</html>
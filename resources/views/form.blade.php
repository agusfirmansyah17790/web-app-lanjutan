    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">Register Form</div>
    <div class="card-body">
      <form action="tampil.php">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-lg" >Register</button>
        <button type="button" class="btn btn-warning btn-sm" ><a class="nav-link" href="http://127.0.0.1:8000/">back to home</button></a>
     
      </form>
    </div>
  </div>
</div>
</body>
</html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
<form action="project_post.php" method="POST">
  <div class="form-group">
    <label for="username"></label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div> 
      <input id="username" name="username" placeholder="Masukkan Username" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="password">Password</label> 
    <input id="password" name="password" placeholder="Masukkan Password" type="text" required="required" class="form-control">
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Login</button>
  </div>
</form
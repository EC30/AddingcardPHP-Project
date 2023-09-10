<!DOCTYPE HTML>
<html> 
<title>Login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> 
<body>
	<h1> Login form </h1>
    <div class="container">
	<form action ="loginprocess.php" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="pass">
        </div>
       
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    </div>
    
</body>
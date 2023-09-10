<!DOCTYPE HTML>
<html>  
<html lang="en">
<head>
  <title>Forget password page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php
    session_start();
  ?>
  <div class="container">
  <form action ="randomotpprocess.php" method="post">
  <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Enter your otp</h2>


                <div class="form-outline mb-4">
                  <input type="number" id="otp" class="form-control form-control-lg" name="otp"/>
                  <label class="form-label" for="form3Example3cg">Your OTP:  <?php  echo $_SESSION["code"];?></label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit</button>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</div>


</body>
</html>
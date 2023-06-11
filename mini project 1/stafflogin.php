

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Library Management System Login</title>
</head>
<body>
    <section class="vh-100" style="border: solid blue; border-width: 40px;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <span class="h1 fw-bold mb-0"></span>
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form method="POST" style="width: 23rem;">
      
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
      
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="form2Example18">Email address</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="form2Example28">Password</label>
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-info btn-lg btn-block" type="button" name="login"  formaction="staffhomepage.php" value="login">Login</button>
                  </div>
            
                </form>
      
              </div>
      
            </div>
            
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <br><br>
              <img src="library.jpg"
                alt="Login image"  style="width: 550px; height: 500px; object-position: left;">
            </div>
          </div>
        </div>
      </section>
</body>
</html>
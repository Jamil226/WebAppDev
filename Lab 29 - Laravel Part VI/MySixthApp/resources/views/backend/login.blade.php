<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Login - ABC Company</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="../backend/img/favicon.png" rel="icon">
  <link href="../backend/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="../backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../backend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../backend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../backend/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../backend/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../backend/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../backend/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="../backend/css/style.css" rel="stylesheet">
</head>
<body>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="../backend/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>
                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
  </main>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="../backend/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../backend/vendor/chart.js/chart.umd.js"></script>
  <script src="../backend/vendor/echarts/echarts.min.js"></script>
  <script src="../backend/vendor/quill/quill.js"></script>
  <script src="../backend/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../backend/vendor/tinymce/tinymce.min.js"></script>
  <script src="../backend/vendor/php-email-form/validate.js"></script>
  <script src="../backend/js/main.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>E Ticaret Modül (Test Case Project)</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card login-dark">
            <div>
              <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="images/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main"> 
                <form class="theme-form" method="POST" action="/registerposts">
                <?php csrf_field() ?>
                
                  <h4>Hesabınız Yok Mu</h4>
                  <p>Hesap Detaylarınızı Giriniz</p>
                  <div class="form-group">
                    <label class="col-form-label pt-0">Ad Soyad</label>
                    <div class="row g-2">
                      <div class="col-12">
                        <input class="form-control" type="text" name="name"  required placeholder="Ad">
                      </div>
 
                    </div>
                  </div>
                  <div class="col-12 mb-3">
                    <label for="" class="form-label">Rol Seç</label>
                    <select
                      class="form-select form-select-lg"
                      name="role"
                      id=""
                    >
                      <option selected>Rol Seçiniz</option>
                      <option value="Admin">Admin</option>
                      <option value="Satıcı">Satıcı</option>
                      <option value="Müşteri">Müşteri</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-form-label">Email Adres</label>
                    <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Şifre</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">

                    <button class="btn btn-primary btn-block w-100" type="submit">Kayıt Ol</button>
                  </div>

                  <p class="mt-4 mb-0">Hesabınız Var Mı ?<a class="ms-2" href="/login-user">Giriş Yap</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="../assets/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="../assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="../assets/js/script.js"></script>
    </div>
  </body>
</html>
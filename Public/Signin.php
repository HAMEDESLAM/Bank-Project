<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="css/Styles/Signin.css" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css.map" />
    <link rel="stylesheet" href="css/Styles/Global.css" />
  </head>
  <body>
    <!-- Navbar start-->
    <?php include '../Templates/Navbar.php'; ?>
    <!-- Navbar ends-->

    <!--Login form-->
    <section class="w-100">
      <div class="login-container">
        <h2 class="fs-1 fw-bold">تسجيل الدخول</h2>
        <form>
          <div class="mb-3">
            <label for="username" class="form-label fs-5">اسم المستخدم</label>
            <input
              type="text"
              class="form-control"
              id="username"
              name="username"
              required
              placeholder="ادخل اسم المستخدم"
            />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label fs-5">كلمة المرور</label>
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              required
              placeholder="أدخل كلمة المرور"
            />
          </div>
          <div class="mb-3" dir="rtl">
            <input
              type="checkbox"
              class="form-check-input ms-2"
              id="rememberMe"
            />
            <label class="form-check-label" for="rememberMe">تذكرني</label>
          </div>
          <button type="submit" class="btn btn-primary fs-5">
            تسجيل الدخول
          </button>
        </form>
        <div
          id="signin-alert"
          class="alert alert-danger text-center mb-0 mt-2"
        ></div>
      </div>
    </section>
    <!--Login form end-->

    <!-- footer -->
    <?php include "../Templates/Footer.php"?>
    <!--footer end-->

    <script src="js/Scripts/Signin.js"></script>
    <script src="js/Scripts/global.js"></script>
  </body>
</html>

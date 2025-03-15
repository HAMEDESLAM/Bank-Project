<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>حساب العميل الشخصي</title>
    <link href="css/Styles/account.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css.map" />
    <link rel="stylesheet" href="css/Styles/Global.css" />
  </head>
  <body>
    <!-- Navbar start-->
    <?php include '../Templates/Navbar.php'; ?>
    <!-- Navbar ends-->

    <!--Profile-->
    <section class="profile">
      <div class="container">
        <div class="profile-container my-4 my-md-5">
          <div
            class="row d-flex justify-content-between align-items-center px-4 flex-column flex-md-row"
          >
            <!-- Header -->
            <div
              class="profile-header col-10 col-md-3 d-flex flex-column align-items-center"
            >
              <img
                src="Media/blank-profile-picture-973460_1280.webp"
                alt="Profile Picture "
                class="w-100 mx-auto rounded-circle"
              />
              <h2 class="text-center mt-3 w-100">
                أهلاً بك، <span id="showname"></span>
              </h2>
            </div>

            <!-- معلومات العميل -->
            <div class="profile-info col-12 col-md-8 py-5">
              <div class="card-info">
                <h5 class="mb-4">الاسم الكامل</h5>
                <input
                  type="text"
                  id="showfullname"
                  class="me-md-4 py-2 px-3 rounded-3 place w-100 text-black"
                  disabled
                />
              </div>
              <div class="card-info">
                <h5 class="mb-4">رقم الحساب</h5>
                <input
                  type="tel"
                  id="showphone"
                  class="me-md-4 py-2 px-3 rounded-3 place w-100"
                  dir="rtl"
                />
              </div>
              <div class="card-info">
                <h5 class="mb-4">البريد الأكتروني</h5>
                <input
                  type="email"
                  id="showemail"
                  class="me-md-4 py-2 px-3 rounded-3 place w-100"
                />
              </div>
            </div>
          </div>
          <div id="update-alert" class="update-alert mb-0 mt-2"></div>
          <!-- أزرار التحكم -->
          <div class="text-center">
            <button class="btn btn-custom" id="update">تعديل المعلومات</button>
            <button class="btn btn-outline-danger" id="logout">
              تسجيل الخروج
            </button>
          </div>
        </div>
      </div>
    </section>
    <!--profile end-->

    <!--Loans-->
    <section class="loans">
      <div class="container">
        <div class="loans-container mb-5">
          <h2 class="text-center mb-5 fw-bold">القروض</h2>
          <div class="cards-container position-relative gap-3 gap-md-5"></div>
        </div>
      </div>
    </section>
    <!--Loans end-->

    <!-- footer -->
    <?php include "../Templates/Footer.php"?>
    <!--footer end-->

    <script src="js/Scripts/accout-calc.js"></script>
    <script src="js/Scripts/account-render.js"></script>
    <script src="js/Scripts/global.js"></script>
  </body>
</html>

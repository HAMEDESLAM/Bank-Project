<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فتح حساب عميل</title>

    <!--Css-->
    <link rel="stylesheet" href="css/Styles/Signup.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/Styles/Global.css">
</head>

</head>
<body>
    <!-- Navbar start-->
    <?php include '../Templates/Navbar.php'; ?>
    <!-- Navbar ends-->

    <!--Form-->
    <section class="form-section d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="register-container">
                <h2 class="fs-1 fw-bold">فتح حساب</h2>
                <form>
                    <div class="form-group">
                      <div class="form-part active">
                        <div class="mb-3">
                            <label for="name" class="form-label">الاسم الكامل</label>
                            <input type="text" class="form-control" id="name" name="fullName" required placeholder="أدخل الاسم الكامل">
                        </div>
                        
                        <div class="mb-3">
                            <label for="dob" class="form-label">تاريخ الميلاد</label>
                            <input type="date" class="form-control" id="dob" name="dob" required dir="rtl">
                        </div>
            
                        <div class="mb-3">
                            <label for="nationalId" class="form-label">رقم الهوية / جواز السفر</label>
                            <input type="text" class="form-control" id="nationalId" name="idNumber" required placeholder="أدخل رقم الهوية أو جواز السفر">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">العنوان</label>
                            <input type="text" class="form-control" id="address" name="address" required placeholder="أدخل العنوان">
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">رقم الهاتف</label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phone" required placeholder="أدخل رقم الهاتف" dir="rtl" min="11">
                        </div>
                      </div>
                      <div class="form-part disabled">
                          <div class="mb-3">
                              <label for="email" class="form-label">البريد الإلكتروني</label>
                              <input type="email" class="form-control" id="email" name="email" required placeholder="أدخل البريد الإلكتروني">
                          </div>
              
                          <div class="mb-3">
                              <label for="password" class="form-label">كلمة المرور</label>
                              <input type="password" class="form-control" id="password" name="password" required placeholder="أدخل كلمة المرور">
                          </div>
              
                          <div class="mb-3">
                              <label for="confirmPassword" class="form-label">تأكيد كلمة المرور</label>
                              <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required placeholder="تأكيد كلمة المرور">
                          </div>
              
                          <div class="mb-3 " dir="rtl">
                              <input type="checkbox" class="form-check-input ms-2" id="agreeTerms" name="agreeTerms" required >
                              <label class="form-check-label" for="agreeTerms">أوافق على الشروط والأحكام</label>
                          </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-around align-items-center mt-3 ">
                        <button type="button" class="bg-primary text-light p-1 control" id="next">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                        
                        <button type="submit" class="btn btn-primary w-50 " disabled id="submit">فتح الحساب</button>
        
                        <button type="button" class="bg-primary text-light p-1 control active disabled" id="prev">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                    </div>
                    <div id="signup-alert" class="signup-alert mb-0 mt-2">

                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Form end-->

    <!-- footer -->
    <?php include "../Templates/Footer.php"?>
    <!--footer end-->
  
    <script src="js/Scripts/Signup.js"></script>
    <script src="js/Scripts/global.js"></script>
</body>
</html>

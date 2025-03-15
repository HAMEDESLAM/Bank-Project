<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>قاعدة بيانات المستخدمين</title>

    <!--Css lINK-->

    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css.map" />
    <link rel="stylesheet" href="css/Styles/Global.css" />
    <style>
        #Table-data .container{
            min-height:calc(100vh - 66px);
        }
    </style>
  </head>
  <body>
    <!-- Navbar start-->
    <?php include '../Templates/Navbar.php'; ?>
    <!-- Navbar ends-->

    <section id="Table-data">
        <div class="container my-5">
            <h2 class="text-center mb-4">قاعدة بيانات المستخدمين</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered ">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>الأسم الكامل</th>
                            <th>تاريخ الميلاد</th>
                            <th>الرقم القومي</th>
                            <th>العنوان</th>
                            <th>رقم الهاتف</th>
                            <th>الحساب الالكتروني</th>
                        </tr>
                    </thead>
                    <tbody id="usersTableBody">

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include "../Templates/Footer.php"?>
    <!--footer end-->


    <script src="js/db.js"></script>
    <script src="js/Scripts/global.js"></script>
  </body>
</html>

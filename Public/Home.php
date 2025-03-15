<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>نظام البنك</title>

    <!--Css lINK-->

    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css.map" />
    <link rel="stylesheet" href="css/Styles/Global.css" />
    <link rel="stylesheet" href="css/Styles/style.css" />
  </head>
  <body>
    <!-- Navbar start-->
    <?php include '../Templates/Navbar.php'; ?>
    <!-- Navbar ends-->

    <!--Landing-->
    <section class="landing position-relative">
      <div
        class="container d-flex align-items-center justify-content-center justify-content-lg-between h-100 flex-column flex-lg-row text-center text-lg-end"
      >
        <div class="Landing-content mb-5 mb-md-0">
          <h1 class="text-light fw-bold mb-4">استشارات لخدمات بنكيه</h1>
          <p class="text-light">
            استشارات لخدمات بنكيه هو نظام يساعدك على إدارة حساباتك المالية بكل
            سهولة وأمان
          </p>
          <a href="Signup.php" class="btn btn-primary">ابدأ الآن</a>
        </div>
        <div class="mt-5 col-8 col-md-5 col-lg-4 mb-5 mb-md-0">
          <img class="w-100" src="Media/Logo.png" alt="Banking Image" />
        </div>
      </div>
    </section>

    <!-- carousel-->
    <section class="slider">
      <h1 class="text-center mb-3 text-light fw-bold">الخدمات</h1>
      <div id="slider" class="carousel slide mx-2">
        <div class="carousel-indicators flex-row-reverse">
          <button
            type="button"
            data-bs-target="#slider"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#slider"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#slider"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner w-100 h-100">
          <div
            class="carousel-item active w-100 h-100 position-relative"
            id="slide1"
          >
            <img src="Media/Slide 1.png" class="d-block" alt="Slide 1" />
            <div class="carousel-item-content position-absolute">
              <h2 class="text-light fw-semibold mb-3">أحدث الأخبار المصرفية</h2>
              <p class="text-light">
                ابقَ على اطلاع دائم بأحدث التغيرات والأخبار الاقتصادية التي تؤثر
                على القطاع المصرفي المحلي والعالمي. نقدم لك تغطية شاملة للأحداث
                والقرارات المالية التي تشكل مستقبل الأسواق والبنوك، مع تحليلات
                عميقة تساعدك على اتخاذ قرارات مالية أكثر ذكاءً.
              </p>
            </div>
          </div>
          <div class="carousel-item w-100 h-100 position-relative" id="slide2">
            <img
              src="Media/the-importance-of-financial-management.jpg"
              class="d-block w-100"
              alt="Slide 2"
            />
            <div class="carousel-item-content position-absolute">
              <h2 class="text-light fs-1 fw-semibold mb-3">
                معرض الإنجازات والخدمات
              </h2>
              <p class="text-light fs-5">
                استكشف معرضنا الذي يبرز أهم مشاريعنا وخدماتنا المالية التي
                قدمناها لشركائنا وعملائنا في مختلف القطاعات. يضم المعرض نماذج من
                قصص النجاح والشهادات التي تعكس جودة خدماتنا وحرصنا على تحقيق
                أفضل النتائج لجميع عملائنا.
              </p>
            </div>
          </div>
          <div class="carousel-item w-100 h-100 position-relative" id="slide3">
            <img src="Media/Slide 3.jpg" class="d-block" alt="Slide 3" />
            <div class="carousel-item-content position-absolute">
              <h2 class="text-light fs-1 fw-semibold mb-3">تمويل مرن وسريع</h2>
              <p class="text-light fs-5">
                نقدم حلولًا مالية مبتكرة لدعم نمو أعمالك وتحقيق أهدافك بسهولة.
                نحن ندرك أن السرعة والمرونة هما مفتاح النجاح، لذلك نوفر خدمات
                تمويل مصممة خصيصًا لتلبية احتياجاتك الفريدة، سواء كنت تبحث عن
                توسعة مشروعك، أو دعم التدفقات النقدية، أو الاستثمار في فرص
                جديدة. معنا، يصبح تمويلك في متناول يدك بخطوات بسيطة وواضحة.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#slider"
          data-bs-slide="prev"
          aria-label="Previous Slide"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#slider"
          data-bs-slide="next"
          aria-label="Next Slide"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>
    </section>

    <!-- API Section -->
    <div class="container-fluid mt-5 px-2 pb-5">
      <h1 class="text-center mb-4 fw-bold">اخبار البزنس</h1>
      <div id="posts-container">
        <div class="card">
          <div class="row g-0 h-100">
            <div class="col-5 placeholder-glow h-100">
              <div class="placeholder w-100 h-100"></div>
            </div>
            <div class="col-7 h-100">
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <h6 class="card-subtitle placeholder-glow">
                  <span class="placeholder col-7"></span>
                </h6>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-8"></span>
                </p>
                <a
                  class="btn btn-primary disabled placeholder col-6"
                  aria-disabled="true"
                ></a>
                <p class="mt-3 placeholder-glow">
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row g-0 h-100">
            <div class="col-5 placeholder-glow h-100">
              <div class="placeholder w-100 h-100"></div>
            </div>
            <div class="col-7 h-100">
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <h6 class="card-subtitle placeholder-glow">
                  <span class="placeholder col-7"></span>
                </h6>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-8"></span>
                </p>
                <a
                  class="btn btn-primary disabled placeholder col-6"
                  aria-disabled="true"
                ></a>
                <p class="mt-3 placeholder-glow">
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row g-0 h-100">
            <div class="col-5 placeholder-glow h-100">
              <div class="placeholder w-100 h-100"></div>
            </div>
            <div class="col-7 h-100">
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <h6 class="card-subtitle placeholder-glow">
                  <span class="placeholder col-7"></span>
                </h6>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-8"></span>
                </p>
                <a
                  class="btn btn-primary disabled placeholder col-6"
                  aria-disabled="true"
                ></a>
                <p class="mt-3 placeholder-glow">
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row g-0 h-100">
            <div class="col-5 placeholder-glow h-100">
              <div class="placeholder w-100 h-100"></div>
            </div>
            <div class="col-7 h-100">
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <h6 class="card-subtitle placeholder-glow">
                  <span class="placeholder col-7"></span>
                </h6>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-8"></span>
                </p>
                <a
                  class="btn btn-primary disabled placeholder col-6"
                  aria-disabled="true"
                ></a>
                <p class="mt-3 placeholder-glow">
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row g-0 h-100">
            <div class="col-5 placeholder-glow h-100">
              <div class="placeholder w-100 h-100"></div>
            </div>
            <div class="col-7 h-100">
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <h6 class="card-subtitle placeholder-glow">
                  <span class="placeholder col-7"></span>
                </h6>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-8"></span>
                </p>
                <a
                  class="btn btn-primary disabled placeholder col-6"
                  aria-disabled="true"
                ></a>
                <p class="mt-3 placeholder-glow">
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row g-0 h-100">
            <div class="col-5 placeholder-glow h-100">
              <div class="placeholder w-100 h-100"></div>
            </div>
            <div class="col-7 h-100">
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <h6 class="card-subtitle placeholder-glow">
                  <span class="placeholder col-7"></span>
                </h6>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-8"></span>
                </p>
                <a
                  class="btn btn-primary disabled placeholder col-6"
                  aria-disabled="true"
                ></a>
                <p class="mt-3 placeholder-glow">
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row g-0 h-100">
            <div class="col-5 placeholder-glow h-100">
              <div class="placeholder w-100 h-100"></div>
            </div>
            <div class="col-7 h-100">
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <h6 class="card-subtitle placeholder-glow">
                  <span class="placeholder col-7"></span>
                </h6>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-8"></span>
                </p>
                <a
                  class="btn btn-primary disabled placeholder col-6"
                  aria-disabled="true"
                ></a>
                <p class="mt-3 placeholder-glow">
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row g-0 h-100">
            <div class="col-5 placeholder-glow h-100">
              <div class="placeholder w-100 h-100"></div>
            </div>
            <div class="col-7 h-100">
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <h6 class="card-subtitle placeholder-glow">
                  <span class="placeholder col-7"></span>
                </h6>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-8"></span>
                </p>
                <a
                  class="btn btn-primary disabled placeholder col-6"
                  aria-disabled="true"
                ></a>
                <p class="mt-3 placeholder-glow">
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row g-0 h-100">
            <div class="col-5 placeholder-glow h-100">
              <div class="placeholder w-100 h-100"></div>
            </div>
            <div class="col-7 h-100">
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <h6 class="card-subtitle placeholder-glow">
                  <span class="placeholder col-7"></span>
                </h6>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-8"></span>
                </p>
                <a
                  class="btn btn-primary disabled placeholder col-6"
                  aria-disabled="true"
                ></a>
                <p class="mt-3 placeholder-glow">
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row g-0 h-100">
            <div class="col-5 placeholder-glow h-100">
              <div class="placeholder w-100 h-100"></div>
            </div>
            <div class="col-7 h-100">
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <h6 class="card-subtitle placeholder-glow">
                  <span class="placeholder col-7"></span>
                </h6>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-4"></span>
                  <span class="placeholder col-6"></span>
                  <span class="placeholder col-8"></span>
                </p>
                <a
                  class="btn btn-primary disabled placeholder col-6"
                  aria-disabled="true"
                ></a>
                <p class="mt-3 placeholder-glow">
                  <span class="placeholder col-4"></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php include "../Templates/Footer.php"?>
    <!--footer end-->

    <script src="js/main.js"></script>
    <script src="js/Scripts/global.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.bundle.min.js.map"></script>
  </body>
</html>

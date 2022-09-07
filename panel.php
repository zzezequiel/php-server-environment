<?php
session_start();
?>

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>مثال الألبوم</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

/*footer styles*/ 

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    <?php
  if (isset($_SESSION["email"])){}
 else {
  header("location: index.php");
 }


    ?>
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">حول</h4>
          <p class="text-muted">أضف بعض المعلومات حول الألبوم، المؤلف، أو أي سياق خلفية آخر. اجعلها بضع جمل حتى يتمكن الزوار من التقاط بعض التلميحات المفيدة. ثم اربطها ببعض مواقع التواصل الاجتماعي أو معلومات الاتصال.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">تواصل معي</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">تابعني على تويتر</a></li>
            <li><a href="#" class="text-white">شاركني الإعجاب في فيسبوك</a></li>
            <li><a href="#" class="text-white">راسلني على البريد الإلكتروني</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
    <a href="close_session.php" class="navbar-brand d-flex align-items-center">تسجيل خروج</a>
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>الألبوم</strong>
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="تبديل التنقل">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">مثال الألبوم</h1>
        <p class="lead text-muted">وصف قصير حول الألبوم أدناه (محتوياته ، ومنشؤه ، وما إلى ذلك). اجعله قصير ولطيف، ولكن ليست قصير جدًا حتى لا يتخطى الناس هذا الألبوم تمامًا.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">الدعوة الرئيسية للعمل</a>
          <a href="#" class="btn btn-secondary my-2">عمل ثانوي</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <div xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225"src="https://www.hola.com/imagenes/viajes/20171103101515/imprescindibles-en-dubai-emiratos-arabes/0-503-849/dubai-panoramica-t.jpg" alt="">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
            </div>

            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                </div>
                <small class="text-muted">9 دقائق</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225"src="https://www.visitdubai.com/-/media/gathercontent/article/t/top-things-to-do-in-dubai/media/top-things-to-do-in-dubai-palm-jumeirah-4.jpg?rev=ea1bd7b44f7843d1a48af4b352789cb0&cx=0.5&cy=0.5&cw=1180&ch=590" alt="">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
            </div>

            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                </div>
                <small class="text-muted">9 دقائق</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225"src="https://media.istockphoto.com/photos/burj-khalifa-dubai-picture-id916091586?k=20&m=916091586&s=612x612&w=0&h=26AeffXok9yrhzqKi6IXsjH32hB-C68Cs6-ESHSTtcQ=" alt="">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
            </div>

            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                </div>
                <small class="text-muted">9 دقائق</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225"src="https://www.visitdubai.com/-/media/gathercontent/article/t/top-things-to-do-in-dubai/media/top-things-to-do-in-dubai-desert-camel-9.jpg?rev=2f332b048c3b4b8585e41c4e9329ebfa&cx=0.5&cy=0.5&cw=1180&ch=590" alt="">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
            </div>

            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                </div>
                <small class="text-muted">9 دقائق</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225"src="https://www.visitdubai.com/-/media/gathercontent/poi/t/the-dubai-mall/fallback-image/the-dubai-mall-poi-shutterstock.jpg?rev=c5e9c4ffcdee4145b29d839227896dc2&cx=0.64&cy=0.38&cw=1180&ch=590" alt="">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
            </div>

            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                </div>
                <small class="text-muted">9 دقائق</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225"src="https://www.visitdubai.com/-/media/gathercontent/article/t/top-things-to-do-in-dubai/media/20-amazing-things-to-do-in-dubai-dubai-frame-dtcm.jpg?rev=a70375b72b8d45919bdd927dffb95f6a&cx=0.5&cy=0.5&cw=1180&ch=590" alt="">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
            </div>

            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                </div>
                <small class="text-muted">9 دقائق</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225"src="https://www.visitdubai.com/-/media/gathercontent/article/t/top-things-to-do-in-dubai/media/top-things-to-do-in-dubai-skyline-canal-11.jpg?rev=eb307d917d594c96b8b7069803ee21c2&cx=0.5&cy=0.5&cw=1180&ch=590" alt="">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
            </div>

            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                </div>
                <small class="text-muted">9 دقائق</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225"src="https://www.visitdubai.com/-/media/gathercontent/article/t/top-things-to-do-in-dubai/media/20-amazing-things-to-do-in-dubai-dunai-marina-gettyimages.jpg?rev=c9d0f4ae03cc40cfb6fcd7ec4dd7cfff&cx=0.5&cy=0.5&cw=1180&ch=590" alt="">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
            </div>

            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                </div>
                <small class="text-muted">9 دقائق</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: صورة مصغرة" preserveAspectRatio="xMidYMid slice" focusable="false">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225"src="https://www.visitdubai.com/-/media/gathercontent/article/t/top-things-to-do-in-dubai/media/top-things-to-do-in-dubai-miracle-garden-19.jpg?rev=3f5d36a92f424b87bba7511b3a2b34fd&cx=0.5&cy=0.5&cw=1180&ch=590" alt="">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">صورة مصغرة</text>
            </div>

            <div class="card-body">
              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                </div>
                <small class="text-muted">9 دقائق</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<div class="b-example-divider"></div>

<div class="container">

  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
    
    
   
  </footer>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

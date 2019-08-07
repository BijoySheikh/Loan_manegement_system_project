<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>torun shongho - accounting</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link href="vendor/jquery/jquery-ui.min.css" rel="stylesheet">


  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

</head>






<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#">হোম</a>
              </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">কমিটি</a>
          </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="member.html">সদস্য</a>
            </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">হিসাব</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">তরুন সংঘ একতা সমিতি লিঃ</h1>
          <h3 class="text-uppercase text-gray font-weight-bold">ঋণ প্রদান, আয়-ব্যয় হিসাব সমূহ</h3>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">একটি নিবন্ধনকৃত এবং গণতান্ত্রিক শৃংখলায় পরিচালিত সংবিধিবদ্ধ অর্থনৈতিক সংগঠন</p>
          <a class="btn btn-primary js-scroll-trigger new" href="#contact">নতুন সদস্য যোগ করুন</a>
        </div>
      </div>
    </div>
  </header>

   <!-- Services Section -->
   <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">হিসাব সমূহ</h2>
      <hr class="divider">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-users text-primary mb-4"></i>
            <h3 class="h4 mb-2">১০০ জন</h3>
            <p class="text-muted mb-0 description">বর্তমান সদস্য সংখ্যা</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-hand-holding-usd text-primary mb-4"></i>
            <h3 class="h4 mb-2">৫০,৬৫০ টাকা</h3>
            <p class="text-muted mb-0 description">সর্বমোট ঋণ প্রদান</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="far fa-4x fa-chart-bar text-primary mb-4"></i>
            <h3 class="h4 mb-2">২৫,৩৬০ টাকা</h3>
            <p class="text-muted mb-0 description">মুনাফার পরিমাণ</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-money-check-alt text-primary mb-4"></i>
            <h3 class="h4 mb-2">২,৮০,১৮০ টাকা</h3>
            <p class="text-muted mb-0 description">সর্বমোট টাকার পরিমাণ</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- service section end -->




  <!-- member add Section -->
 <section class="page-section Custom-form" id="contact">
    <div class="container">
        <h2 class="mt-0 text-center">সদস্য ফরম</h2>
        <hr class="divider">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
          <div class="user-form">
            <form action="insert.php" method="POST" autocomplete="off">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                      <input class="mt-3"  type="text" name="m_name"  placeholder="নাম"><br>
                      <input class="mt-3"  type="text" name="f_name" placeholder="পিতার নাম"><br>
                      <input class="mt-3"  type="text" name="phone_no"  placeholder="ফোন নাম্বার"><br>
                      <input class="mt-3" type="text" name="refer_name" placeholder="জামিনদারের নাম"><br>
                      <input class="mt-3" type="text" name="present_addr"  placeholder="বর্তমান ঠিকানা"><br>
                      <input class="mt-3" type="text" name="permanent_addr"  placeholder="স্থায়ী ঠিকানা"><br>
                      <label for="upload_img" class="btn btn-warning mt-4">ছবি যোগ করুন</label>
                      <input style=" display:none;" class="mb-5 mt-3" type="file" name="upload_img" id="upload_img" accept="image/*">
                     
                  </div>
                  <div class="col-md-6">
                      <input class="mt-3" type="number" name="loan_sirial"  placeholder="ঋণ নং"><br>
                      <input class="mt-3" name="loan_date" type="text" id="datepicker" placeholder="তারিখ" min="2010-01-01" value="">
                      <input class="mt-3" type="number" name="loan_amount"  placeholder="ঋণের পরিমাণ"><br>
                      <input class="mt-3" type="number" name="profit_amount"  placeholder="মুনাফার পরিমাণ"><br>
                      <input class="mt-3" type="number" name="total_amount"  placeholder="মোট টাকা"><br>
                      <input class="mt-3" type="number" name="premier_amount"  placeholder="কিস্তির পরিমাণ"><br>
                      <input class="mt-3" type="number" name="savings_amount"  placeholder="সঞ্চয়ের পরিমাণ"><br>
                  </div>
                </div>
                <input  type="submit" class="btn btn-info mt-5 text-white" value="সদস্য যোগ করুন">        
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  
  <section class="page-section" id="about">
      <div class="container">
        <h2 class="text-center mt-0">পরিচালকবৃন্দ</h2>
        <hr class="divider">
        <div class="row member slider-active">
      
      <div class="col-lg-3 col-md-6 text-center ">
        <div class="mt-5">
            <img src="img/bipul.jpg" class="rounded mx-auto d-block" width="200" height="auto" alt="">
            <h5 class="mt-3 mb-3 text-center">বিপুল আহমেদ<span>,  সাধারণ সম্পাদক</span></h5>
            <a class="btn btn-info js-scroll-trigger" href="#about">আরও জানুন</a>
        </div>
      </div>  
      <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
              <img src="img/bipul.jpg" class="rounded mx-auto d-block" width="200" height="auto" alt="">
              <h5 class="mt-3 mb-3 text-center">বিপুল আহমেদ<span>,  সাধারণ সম্পাদক</span></h5>
              <a class="btn btn-info js-scroll-trigger" href="#about">আরও জানুন</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <img src="img/bipul.jpg" class="rounded mx-auto d-block" width="200" height="auto" alt="">
                <h5 class="mt-3 mb-3 text-center">বিপুল আহমেদ<span>,  সাধারণ সম্পাদক</span></h5>
                <a class="btn btn-info js-scroll-trigger" href="#about">আরও জানুন</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                <img src="img/bipul.jpg" class="rounded mx-auto d-block" width="200" height="auto" alt="">
                <h5 class="mt-3 mb-3 text-center">বিপুল আহমেদ<span>,  সাধারণ সম্পাদক</span></h5>
                <a class="btn btn-info js-scroll-trigger" href="#about">আরও জানুন</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                  <img src="img/bipul.jpg" class="rounded mx-auto d-block" width="200" height="auto" alt="">
                  <h5 class="mt-3 mb-3 text-center">বিপুল আহমেদ<span>,  সাধারণ সম্পাদক</span></h5>
                  <a class="btn btn-info js-scroll-trigger" href="#about">আরও জানুন</a>
              </div>
            </div>                                      
        </div>
      </div>
    </section>


  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="text-center text-muted">ফকির গার্মেন্টস রোড, কায়েমপুর, বিলাশনগর, ফতুল্লা, নারায়ণগঞ্জ। মোবাইল:  01840 545056, 01840 000000</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="js/creative.js"></script>

</body>

</html>




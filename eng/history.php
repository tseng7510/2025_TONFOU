<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages historyPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>
      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <h1 class="title">Our History</h1>
          <div class="description">Professional Manufacturer of Power Chuck & Collet Chuck & Hydraulic Cylinder & High Precision Jaws</div>
        </div>
      </div>

      <div class="mainBox">

        <section>

          <div class="outerBox">
            <div class="contentBox">
              <div class="container">

                <div class="breadcrumbBox">
                  <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                      <a href="index.php" itemprop="item">
                        <span itemprop="name">Home</span>
                      </a>
                      <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                      <span itemprop="name">Company</span>
                      <meta itemprop="position" content="2">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                      <span itemprop="name">History</span>
                      <meta itemprop="position" content="3">
                    </li>
                  </ul>
                </div>

                <div class="listBox">
                  <div class="swiperArrow swiper-button-prev"></div>
                  <div class="swiperArrow swiper-button-next"></div>
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <?php for ($i = 0; $i < 10; $i++) { ?>
                        <div class="swiper-slide">
                          <div class="item">
                            <div class="infoBox">
                              <h2 class="title">1989</h2>
                              <div class="description">Ton Fou’s first factory was established (Dongshan Rd, Taichung). Their products included large bore hollow hydraulic chucks and high speed hydraulic hollow cylinders.</div>
                            </div>
                            <div class="pic"><img src="../images/in/a5.jpg" alt=""></div>
                          </div>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>

                <div class="yearBox">
                  <div class="swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><span>1989</span></div>
                      <div class="swiper-slide"><span>1990</span></div>
                      <div class="swiper-slide"><span>1996</span></div>
                      <div class="swiper-slide"><span>1997</span></div>
                      <div class="swiper-slide"><span>1999</span></div>
                      <div class="swiper-slide"><span>2001</span></div>
                      <div class="swiper-slide"><span>2005</span></div>
                      <div class="swiper-slide"><span>2010</span></div>
                      <div class="swiper-slide"><span>2001</span></div>
                      <div class="swiper-slide"><span>2005</span></div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </section>

      </div>
    </main>

    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <script type="text/javascript" src="plugins/gsap.min.js"></script>
  <script type="text/javascript" src="plugins/ScrollTrigger.min.js"></script>
  <script type="text/javascript">
    const yearSwiper = new Swiper('.yearBox .swiper', {
      slidesPerView: 6,
      breakpoints: {
        767: {
          slidesPerView: 8,
        },
      },
    });
    const listSwiper = new Swiper('.listBox .swiper', {
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: yearSwiper,
      },
    });
  </script>
</body>

</html>
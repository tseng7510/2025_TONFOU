<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/application.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages applicationDetail">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>
      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <h1 class="title">Application</h1>
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
                      <span itemprop="name">Application</span>
                      <meta itemprop="position" content="2">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                      <span itemprop="name">CNC Lathe</span>
                      <meta itemprop="position" content="3">
                    </li>
                  </ul>
                </div>


                <div class="topBox wow fadeInRight" data-wow-delay="0.2s">
                  <div class="info">
                    <h2 class="title">CNC Lathe</h2>
                    <div class="description">In CNC lathe applications, the clamping system plays a vital role in ensuring machining stability and precision. High-quality clamping solutions are essential for securely holding workpieces, maintaining accuracy, and preventing deformation during the machining process.<br /><br />

                      With advanced designs such as through-hole configurations for handling long workpieces and mechanisms that provide exceptional clamping force, our products are tailored to meet the diverse demands of CNC lathe operations. Whether for heavy-duty cutting or high-precision machining, these solutions enhance productivity and machining quality, making them indispensable for efficient lathe operations.</div>
                  </div>
                  <div class="pic"><img src="../images/in/ap4.png" alt=""></div>
                </div>

                <div class="bottomBox wow fadeInRight" data-wow-delay="0.2s">
                  <div class="subTitle">Solution</div>

                  <div class="listBox">

                    <div class="swiperArrow swiper-button-prev"></div>
                    <div class="swiperArrow swiper-button-next"></div>
                    <div class="swiper">
                      <div class="swiper-wrapper">

                        <? for ($i = 0; $i < 6; $i++) { ?>
                          <div class="swiper-slide">
                            <div class="item">
                              <a href="products_detail.php">
                                <div class="pic"><img src="../images/index/p.png" alt=""></div>
                                <div class="info">
                                  <h2 class="title">TF3B</h2>
                                  <div class="description">3-jaw wedge type through-hole power chuck (without adaptor)</div>
                                  <div class="more">READ MORE</div>
                                </div>
                              </a>
                            </div>
                          </div>
                        <? } ?>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="pageBtnBox wow fadeInUp" data-wow-delay="0.2s">
                  <a href="products_2.php" class="back">BACK TO LIST</a>
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

  <script type="text/javascript">
    const productSwiper = new Swiper('.mainBox .bottomBox .swiper', {

      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      navigation: {
        nextEl: '.mainBox .bottomBox .swiper-button-next',
        prevEl: '.mainBox .bottomBox .swiper-button-prev',
      },
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
        formatFractionCurrent: function(number) {
          return ('0' + number).slice(-2);
        },
        formatFractionTotal: function(number) {
          return ('0' + number).slice(-2);
        },
      },
      breakpoints: {
        500: {
          slidesPerView: 2,
          spaceBetween: 40
        },
        950: {
          slidesPerView: 3,
          spaceBetween: 80,
        },
        1400: {
          slidesPerView: 4,
          spaceBetween: 120,
        }
      }
    });
  </script>
</body>

</html>
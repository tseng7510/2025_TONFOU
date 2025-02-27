<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>

      <div class="mainBox">
        <div class="banner">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="pic">
                  <img src="../images/index/banner.jpg" alt="">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="pic">
                  <div class="videoContent">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/w2jhL5jMOCM?controls=0&autoplay=1&mute=1&playlist=w2jhL5jMOCM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>


        <section class="productBox">
          <div class="outerBox">
            <div class="container wow fadeInLeft" data-wow-delay="0s">
              <div class="listBox">
                <div class="swiperArrow swiper-button-prev"></div>
                <div class="swiperArrow swiper-button-next"></div>
                <div class="swiper">
                  <div class="swiper-pagination"></div>
                  <div class="swiper-wrapper">
                    <? for ($i = 0; $i < 2; $i++) { ?>
                      <div class="swiper-slide">
                        <div class="item">
                          <div class="info">
                            <h2 class="title">Power Chucks for CNC Lathes</h2>
                            <p class="description">jaw wedge type through-hole power chuck (without adaptor)</p>
                          </div>
                          <div class="pic"><img src="../images/index/p.png" alt=""></div>
                          <a class="indexMore" href="products_detail.php">READ MORE</a>
                        </div>
                      </div>
                    <? } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="newsBox">
          <div class="outerBox">
            <div class="container">
              <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">Latest news from TON FOU</h2>
              <div class="listBox">
                <? for ($i = 0; $i < 3; $i++) { ?>
                  <div class="item">
                    <a href="news_detail.php">
                      <div class="pic"><img src="../images/index/n.jpg" alt=""></div>
                      <h3 class="title">A More Compact Collet Chuck (Workholding) to Reduce Tool Interference</h3>
                      <div class="description">The collet chuck CL52-A6D is a new product designed for industry 4.0 which is a ...</div>
                      <div class="more">READ MORE</div>
                    </a>
                  </div>
                <? } ?>
              </div>
              <a href="news.php" class="indexMore">SHOW ALL</a>
            </div>
          </div>
        </section>

        <section class="aboutBox">
          <div class="outerBox">
            <div class="container wow fadeInLeft" data-wow-delay="0s">
              <div class="contentBox">
                <div class="pic"><img src="../images/index/a.png" alt=""></div>
                <div class="info">
                  <h2 class="blockTitle">Why choose TON FOU</h2>
                  <div class="description">TON FOU ENTERPRISE CO., LTD. specializes in providing high-quality hydraulic chucks, hydraulic cylinders, collets, and rotary hydraulic cylinders. With innovative designs and exquisite craftsmanship, we meet various industrial needs. TON FOU operates to the highest standards and has been awarded ISO9001 certification, ensuring that our products and services comply with international quality standards.</div>
                  <a href="about.php" class="indexMore">READ MORE</a>
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
    const bannerSwiper = new Swiper('.banner .swiper', {
      loop: true,
      pagination: {
        el: '.banner .swiper-pagination',
        clickable: true,
      },
      // autoplay: {
      //   delay: 4000,
      //   stopOnLastSlide: false,
      //   disableOnInteraction: true,
      // },
    });

    const productSwiper = new Swiper('.productBox .swiper', {
      loop: true,
      navigation: {
        nextEl: '.productBox .swiper-button-next',
        prevEl: '.productBox .swiper-button-prev',
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
    });
  </script>
</body>

</html>
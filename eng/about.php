<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages aboutPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>
      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <h1 class="title">About TONFOU</h1>
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
                      <span itemprop="name">About TONFOU</span>
                      <meta itemprop="position" content="3">
                    </li>
                  </ul>
                </div>

                <div class="blockList">
                  <div class="block block1">
                    <div class="infoBox">
                      <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">From Taiwan to the World</h2>
                      <div class="editor wow fadeInUp" data-wow-delay="0.2s">
                        TONFOU was founded in Taiwan in 1989. We specialize in producing power chucks and hydraulic cylinders for CNC lathes. Since its inception, we have stuck to our philosophy of “adhere to the highest quality”. Slowly and steadily, brand “TONFOU” has gained lots of market recognition and expanded internationally.
                      </div>
                    </div>
                    <div class="pic wow fadeInRight" data-wow-delay="0.4s"><img src="../images/in/logo.png" alt=""></div>
                  </div>

                  <div class="block block2">
                    <div class="infoBox">
                      <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">Adhere to the
                        <span>Highest Quality</span>
                      </h2>
                      <div class="editor wow fadeInUp" data-wow-delay="0.2s">TONFOU’s product includes power chucks, hydraulic cylinders, and other specialized work holdings. In order to meet diverse demands, we offer products from standard models to customized solutions. During the manufacturing process, in order to maintain high standards of quality control, we have introduced advanced equipment such as specialized grinding machines and five-axis machining centers to ensure that each product meets the highest quality standards.
                      </div>
                    </div>
                    <div class="pic wow fadeInRight" data-wow-delay="0.4s"><img src="../images/in/a1.jpg" alt=""></div>
                  </div>

                  <div class="block block3">
                    <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">Innovation-Driven and Future-Oriented</h2>
                    <div class="editor wow fadeInUp" data-wow-delay="0.2s">Continuous innovation is the key to keeping competitive. Moving forward, TONFOU will continuously invest resources in the development of new products and technological upgrades, focusing on creating more efficient and precise solutions. We will continue to expand our product line and enhance service quality to meet the needs of global customers.</div>

                    <div class="listBox wow fadeInUp" data-wow-delay="0.4s">
                      <div class="item">
                        <div class="pic"><img src="../images/in/a2.jpg" alt=""></div>
                      </div>
                      <div class="item">
                        <div class="pic"><img src="../images/in/a3.jpg" alt=""></div>
                      </div>
                      <div class="item">
                        <div class="pic"><img src="../images/in/a4.jpg" alt=""></div>
                      </div>
                      <div class="item">
                        <div class="pic"><img src="../images/in/a5.jpg" alt=""></div>
                      </div>
                    </div>
                  </div>


                  <div class="block block4">
                    <h2 class="blockTitle wow fadeInUp" data-wow-delay="0s">R&D and Quality Assurance</h2>
                    <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                      <div class="item">
                        <div class="pic"><img src="../images/in/a6.png" alt=""></div>
                        <div class="title">3D CMM</div>
                      </div>
                      <div class="item">
                        <div class="pic"><img src="../images/in/a7.png" alt=""></div>
                        <div class="title">Projector</div>
                      </div>
                      <div class="item">
                        <div class="pic"><img src="../images/in/a8.png" alt=""></div>
                        <div class="title">2D CMM</div>
                      </div>
                      <div class="item">
                        <div class="pic"><img src="../images/in/a9.png" alt=""></div>
                        <div class="title">Hardness Tester</div>
                      </div>
                      <div class="item">
                        <div class="pic"><img src="../images/in/a10.png" alt=""></div>
                        <div class="title">3D CMM</div>
                      </div>
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
    const block1Swiper = new Swiper('.block1Swiper .swiper', {
      loop: true,
      slidesPerView: 1,
    });
    const block3Swiper = new Swiper('.block3Swiper .swiper', {
      spaceBetween: 20,
      slidesPerView: 1,
    });

    sliderUse('.block2 .picBox')

    gsap.registerPlugin(ScrollTrigger)
    const contentTopNavBtn = document.querySelectorAll('.contentTopNav a');

    const block1 = document.querySelector('.block1');
    const blockTop = block1.getBoundingClientRect().top;

    window.addEventListener('resize', () => blockTop = block1.getBoundingClientRect().top);

    const block = gsap.utils.toArray('.block');
    block.forEach(box => {
      gsap.to(box, {
        scrollTrigger: {
          trigger: box,
          toggleClass: "active",
          start: `-${blockTop - 50} center`,
          end: `bottom center`,
          scrub: true,
          onEnter: myEnterFunc,
          onEnterBack: myEnterFunc,
        }
      })
    });

    function myEnterFunc(value) {
      const index = value.vars.trigger.childElementCount;
      contentTopNavBtn.forEach((value, index) => value.parentNode.classList.remove('active'));
      contentTopNavBtn[index - 1].parentNode.classList.add('active');
    }
  </script>
</body>

</html>
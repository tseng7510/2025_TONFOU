<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/about.css">
</head>


<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages team">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>


    <main class="siteMain" aria-label="main" itemscope>



      <div class="inBanner">
        <div class="outer">
          <div class="container">
            <div class="titleBox wow fadeInUp" data-wow-delay="0s">
              <div class="title">Our Team<span>團隊介紹</span></div>
            </div>
            <div class="breadcrumbBox">
              <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <a href="index.php" itemprop="item">
                    <span itemprop="name">Home</span>
                  </a>
                  <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">關於我們</span>
                  <meta itemprop="position" content="2">
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                  <span itemprop="name">團隊介紹</span>
                  <meta itemprop="position" content="3">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="mainBox">

        <section>
          <div class="outer">
            <div class="container">
              <div class="contentBox">
                <div class="director">
                  <div class="pic"><img src="../images/in/t.jpg" alt=""></div>
                  <div class="info">
                    <div class="title">執行董事</div>
                    <div class="name">歐昱成 Andy Ou</div>
                    <div class="description">曾負笈日本與歐洲求學，也有幸在大學任教多年，深知學生的國際經驗取得無法單純從教科書實現。後期投入國際教育的二十多年間，多次在歐美等先進國家現地考察各級學校，過程中也與頂尖大學教授與行政人員討論各國的教育發展和議題，對外國課程設計、科技的運用以及所學知識如何落實在生活上有很深刻的印象。身為家長和從事教育的工作人，如何將國內教育優勢與國際教育資源做更好的結合，將是學無界實驗教育機構未來的發展使命。</div>
                  </div>
                </div>
                <div class="listBox">
                  <div class="item">
                    <div class="pic"><img src="../images/in/t2.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">校長</div>
                      <div class="name">Stone Liu</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/t3.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">副校長</div>
                      <div class="name">Jack Hung</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/t4.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">行政處主任</div>
                      <div class="name">Fanita Huang</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/t5.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">行政處組員</div>
                      <div class="name">Stone Liu</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/t6.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">學務處主任</div>
                      <div class="name">Tadashi Wu</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/t7.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">高中部導師</div>
                      <div class="name">Shiny Lee</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/t8.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">國中部導師</div>
                      <div class="name">Dean Liu</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/t9.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">推廣處主任</div>
                      <div class="name">Frank Tsai</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/t10.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">推廣處組員</div>
                      <div class="name">Yoann Wu</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/t11.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">科學及IGCSE心理學老師</div>
                      <div class="name">Fernando Garcia</div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="pic"><img src="../images/in/t12.jpg" alt=""></div>
                    <div class="info">
                      <div class="title">國中及IGCSE數學老師</div>
                      <div class="name">Andrew Chang</div>
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
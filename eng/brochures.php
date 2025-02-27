<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages brochures">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>
      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <h1 class="title">Brochures</h1>
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
                      <span itemprop="name">Information</span>
                      <meta itemprop="position" content="2">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                      <span itemprop="name">Brochures</span>
                      <meta itemprop="position" content="3">
                    </li>
                  </ul>
                </div>

                <div class="tabBtnBox wow fadeInUp" data-wow-delay="0.4s">
                  <button type="button" class="active">Brochures</button>
                  <button type="button" class="loginBtn" data-effect="mfp-zoom-in">Instruction Manual</button>
                </div>
                <div class="tabContentBox wow fadeInUp" data-wow-delay="0s">
                  <div class="tabContent active">
                    <div class="listBox">
                      <? for ($i = 0; $i < 5; $i++) { ?>
                        <div class="item wow fadeInUp" data-wow-delay="0.2s">
                          <a href="#">
                            <h2 class="title">TonFou catalog high resolution</h2>
                            <div class="download">Download</div>
                          </a>
                        </div>
                      <? } ?>
                    </div>
                  </div>
                  <div class="tabContent">2
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

  <div id="loginForm" class="white-popup mfp-with-anim mfp-hide">
    <form>
      <h3>Login to view</h3>
      <ul>
        <li class="inputItem">
          <label for="password"></label>
          <input type="text" id="password" placeholder="Password">
        </li>
        <li class="inputItem">
          <label for="code"></label>
          <input type="password" id="code" placeholder="Code">
          <span class="checkImg"><img src="../images/check_img.jpg"></span>
          <button class="reBtn"></button>
        </li>
      </ul>
      <div class="pageBtnBox">
        <button class="send" type="button" onclick="">Login</button>
      </div>
      <a href="content.php">Request Password</a>
    </form>
  </div>
  <?php include('include_body_bottom.php'); ?>
  <link rel="stylesheet" href="../plugins/Magnific-Popup-master/magnific-popup.css">
  <script src="../plugins/Magnific-Popup-master/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.loginBtn').magnificPopup({
        removalDelay: 500,
        items: {
          src: '#loginForm',
          preloader: false,
          type: 'inline',
          focus: '#password',
        },
        midClick: true,
        callbacks: {
          beforeOpen: function() {
            this.st.mainClass = this.st.el.attr('data-effect');
          }
        },
      });
    });

    $(function() {
      $('.tabBtnBox button').not('.loginBtn').on('click', function() {
        $(this).addClass('active').siblings().removeClass('active');
        $('.tabContentBox .tabContent').eq($(this).index()).addClass('active').siblings().removeClass('active');
      })
    })
  </script>
</body>

</html>
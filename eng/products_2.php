<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList2">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <h1 class="title">Power Chucks for CNC Lathes</h1>
        </div>
      </div>


      <div class="mainBox">

        <section>
          <div class="outerBox">
            <div class="contentBox">
              <div class="container">

                <div class="breadcrumbBox wow fadeInUp" data-wow-delay="0s">
                  <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                      <a href="index.php" itemprop="item">
                        <span itemprop="name">Home</span>
                      </a>
                      <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                      <a href="products.php" itemprop="item">
                        <span itemprop="name">Products</span>
                      </a>
                      <meta itemprop="position" content="2">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="//schema.org/ListItem">
                      <span itemprop="name">Power Chucks for Lathes</span>
                      <meta itemprop="position" content="3">
                    </li>
                  </ul>
                </div>

                <div class="products wow fadeInUp" data-wow-delay="0.2s">
                  <div class="listBox">
                    <? for ($i = 0; $i < 6; $i++) { ?>
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
                    <? } ?>
                  </div>
                </div>
              </div>

              <div class="notice">Power chucks for lathes are essential mechanical fixtures designed to securely hold and stabilize workpieces during machining processes. These chucks offer high precision and strong clamping force, making them suitable for working with various metals and non-metals. Available in a range of sizes and configurations, power chucks can meet diverse application requirements. Whether for traditional turning operations or CNC precision machining, these chucks deliver exceptional performance and reliability.</div>
            </div>
          </div>
        </section>

      </div>
    </main>
    <?php include('include_footer.php'); ?>
  </div>
  <?php include('include_body_bottom.php'); ?>
</body>

</html>
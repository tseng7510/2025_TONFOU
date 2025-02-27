<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/products.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages productsList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>

      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <h1 class="title">Products</h1>
          <div class="description">Professional Manufacturer of Power Chuck & Collet Chuck & Hydraulic Cylinder & High Precision Jaws</div>
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
                      <span itemprop="name">Products</span>
                      <meta itemprop="position" content="2">
                    </li>
                  </ul>
                </div>

                <div class="products wow fadeInUp" data-wow-delay="0.2s">
                  <div class="listBox">
                    <? for ($i = 0; $i < 6; $i++) { ?>
                      <div class="item">
                        <a href="products_2.php">
                          <div class="pic"><img src="../images/index/p.png" alt=""></div>
                          <div class="info">
                            <h2 class="title">Power Chucks for CNC Lathes</h2>
                            <div class="more">READ MORE</div>
                          </div>
                        </a>
                      </div>
                    <? } ?>
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
</body>

</html>
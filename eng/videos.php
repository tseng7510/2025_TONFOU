<!doctype html>
<html lang="en">


<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/news.css">
</head>

<body>

  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages videoList">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>
      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <h1 class="title">Videos</h1>
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
                      <span itemprop="name">Videos</span>
                      <meta itemprop="position" content="3">
                    </li>
                  </ul>
                </div>

                <div class="infoBox wow fadeInUp" data-wow-delay="0.2s">
                  <div class="side">
                    <div class="videoContainer">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/w2jhL5jMOCM?si=yxAYS--ihzQBarDB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <h2 class="title">A More Compact Collet Chuck (Workholding) to Reduce Tool Interference</h2>
                  </div>
                  <div class="content wow fadeInRight" data-wow-delay="0.2s">
                    <div class="listBox">

                      <? for ($i = 0; $i < 5; $i++) { ?>
                        <div class="item">
                          <button type="button" class="btn" data-src='<iframe width="560" height="315" src="https://www.youtube.com/embed/w2jhL5jMOCM?si=yxAYS--ihzQBarDB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'>
                            <div class="pic"><img src="../images/in/v.jpg" alt=""></div>
                            <h3 class="title">A More Compact Collet Chuck (Workholding) to Reduce Tool Interference</h3>
                          </button>
                        </div>
                      <? } ?>

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

  <script>
    const videoTitle = document.querySelector('.videoList .infoBox .side .title')
    const videoBox = document.querySelector('.videoList .infoBox .side .videoContainer iframe')
    const videoItem = document.querySelectorAll('.videoList .content .item button')
    videoItem.forEach((item, index) => {
      item.addEventListener('click', () => {
        const thisSrc = item.dataset.src;
        const parts = thisSrc.split('src="');
        const src = parts[1].split('"')[0];
        videoBox.setAttribute('src', `${src}`);
        const thisTitle = item.querySelector('.title').innerText;
        videoTitle.textContent = thisTitle;
      })
    })
  </script>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
  <?php include('include_head.php'); ?>
  <link rel="stylesheet" type="text/css" href="../css/contact.css">
</head>

<body>
  <?php include('include_body_top.php'); ?>
  <div class="wrapper insidePages contactPage">
    <header class="siteHeader" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
      <?php include('include_top.php'); ?>
    </header>

    <main class="siteMain" aria-label="main" itemscope>
      <div class="pageTitleBox wow fadeInUp" data-wow-delay="0s">
        <div class="container">
          <h1 class="title">Contact</h1>
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
                      <span itemprop="name">Contact</span>
                      <meta itemprop="position" content="2">
                    </li>
                  </ul>
                </div>

                <div class="inquiry">
                  <div class="listBox wow fadeInUp" data-wow-delay="0.2s">
                    <div class="item">
                      <div class="titleF">Request a Quote</div>
                      <a href="products_detail.php">
                        <div class="picBox">
                          <div class="pic"><img src="../images/index/p.png" alt=""></div>
                        </div>
                        <div class="title">Power Chucks for Lathes</div>
                      </a>
                      <button class="del"></button>
                    </div>
                  </div>
                </div>

                <div class="titleBox wow fadeInUp" data-wow-delay="0.2s">
                  <div class="title">Contact Us</div>
                  <div class="description">We appreciate your visit of our website. If you have any inquiry needs about our products, technology, or services, please contact us via the channel below.</div>
                </div>

                <div class="bottomBox">

                  <form class="formBox">
                    <ul>
                      <li class="inputItem wow fadeInUp required">
                        <label for="company">Company</label>
                        <input type="text" class="inputControl" id="company">
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="name">Name</label>
                        <input type="text" class="inputControl" id="name">
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="email">E-Mail</label>
                        <input type="text" class="inputControl" id="email">
                      </li>
                      <li class="inputItem wow fadeInUp">
                        <label for="tel">Tel</label>
                        <input type="text" class="inputControl" id="tel">
                      </li>
                      <li class="inputItem full wow fadeInUp">
                        <label for="address">Address</label>
                        <input type="text" class="inputControl" id="address">
                      </li>
                      <li class="textareaItem full wow fadeInUp">
                        <label for="message">Message</label>
                        <textarea class="textareaControl" name="message" id="message" cols="30" rows="5"></textarea>
                      </li>
                      <li class="inputItem wow fadeInUp required">
                        <label for="code">Code</label>
                        <input type="password" class="inputControl" id="code">
                        <span class="checkImg"><img src="../images/check_img.jpg"></span>
                        <button class="reBtn"></button>
                      </li>
                    </ul>
                    <div class="pageBtnBox wow fadeInUp">
                      <button class="send" type="button" onclick="javascript:location.href='contact_ok.php'">Send Message</button>
                    </div>
                  </form>
                </div>

                <div class="infoBox">
                  <div class="box">
                    <div class="title">TON FOU<br />
                      ENTERPRISE CO., LTD.</div>
                    <div class="info">
                      <ul>
                        <li class="address"><span>ADD：</span>No.461, Dali Rd., Dali District, Taichung City 412, Taiwan</li>
                        <li class="tel"><span>TEL：</span><a href="tel:+886424079695">+886-4-24079695</a></li>
                        <li class="fax"><span>FAX：</span>+886-4-24066186</li>
                        <li><span>EMAIL：</span><a href="mailto:tonfou@ms26.hinet.net">tonfou@ms26.hinet.net</a></li>
                        <li><span>SKYPE：</span>tonfou</li>
                        <li><span>LINE：</span><a href="https://line.me/ti/p/RgJLnlfUGZ" target="_blank">tonfou</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6125.384291103997!2d120.66984904856838!3d24.095330323802184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693c8bf625993b%3A0x31d05b50383767aa!2zNDEy5Y-w5Lit5biC5aSn6YeM5Y2A5aSn6YeM6LevNDYx6Jmf!5e0!3m2!1szh-TW!2stw!4v1734848682309!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
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
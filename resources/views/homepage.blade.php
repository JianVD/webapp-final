@extends('homepage.layouts.app')

@section('title', 'Homepage')

@section('content')

@include('homepage.includes.navigation')
<body>
  <!-- ======= Header ======= -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>OWNER</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Company CEO</h3>
          <p class="fst-italic">
                Jian Vincent Dagon-ay, the CEO who made his dreams come true in such a young age.
          </p>


          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>April 4, 2002</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.jiandagonay.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+639505060510</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Butuan, Philippines</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>20</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master in Business Administration</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>jiandagonay@gmail.com</span></li>
               <!-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>-->
              </ul>
            </div>
          </div>
          <p>
            Jian Vincent Dagon-ay has been eyeing this kind of business since he was a teen-ager.
          </p>
          <p>
             He believed that the lack of financial stability will never cease him to be successful in life.
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="489" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Number of Sold Products</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Operating</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->
    

    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2>Testimonials</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I love them and I've been ordering from them for a long time. Delivery is fast. No complaints and is my favourite site.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Author &amp; Barista</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Amazing customer service! I ordered the wrong coils for my vape and they very kindly sent me a free replacement pack!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Tailor</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I would really recommend this shop.Sleek design of the website and all vapes are available. Quick delivery and good prices.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Dressmaker</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Huge variety of products, really amazing deals and offers and to top it offer a highly responsive customer service team.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->
     


    <!-- ======= About dev ======= -->
    <div class="about-me container">

        <div class="section-title">
          <p class="text-center">DEVELOPER</p>
        </div>
  
        <div class="row">
            <div class="center px-100" style="padding-left: 400px;  padding-right: 400px;">
            <img src="dev.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-0 pt-4 pt-lg-0 content text-center" data-aos="fade-left">
            <h3>Jamyka D. Maghari</h3>
            <p class="fst-italic">
                Front &amp; Back End Developer
            </p> 
          </div>

  </section><!-- End About Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>VAPE</h2>
        <p>Products</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-vapejuice">Vape Juice</li>
            <li data-filter=".filter-pods">Pod & Starter Kits</li>
            <li data-filter=".filter-mods">Mods</li>
            <li data-filter=".filter-atomizers">Atomizers</li>
            <li data-filter=".filter-batteries">Batteries</li>
            <li data-filter=".filter-accessories">Accessories</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-vapejuice">
          <div class="portfolio-wrap">
            <img src="https://vapesocietysupplies.com/wp-content/uploads/2019/08/Loaded-Pink-ejuice.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pink Loaded</h4>
              <p>20</p>    
              <div class="portfolio-links">
                <a href="https://vapesocietysupplies.com/wp-content/uploads/2019/08/Loaded-Pink-ejuice.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pink by Loaded"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-vapejuice">
            <div class="portfolio-wrap">
              <img src="https://cdn.shopify.com/s/files/1/1250/8845/products/red-ice-by-anarchist-tobacco-free-nicotine-series-e-liquid-852032_800x.jpg?v=1644033689" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Red Ice</h4>
                <p>$25</p>    
                <div class="portfolio-links">
                  <a href="https://cdn.shopify.com/s/files/1/1250/8845/products/red-ice-by-anarchist-tobacco-free-nicotine-series-e-liquid-852032_800x.jpg?v=1644033689" data-gallery="portfolioGallery" class="portfolio-lightbox" title="RED ICE"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></a>
                </div>
              </div>
            </div>
          </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-pods">
          <div class="portfolio-wrap">
            <img src="https://www.ecigguide.com/imgs/13/12858/Smoant-S8-pod-vape_2145_800x600.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Smoant S8 pod vape</h4>
              <p>4.2</p>
              <div class="portfolio-links">
                <a href="https://www.ecigguide.com/imgs/13/12858/Smoant-S8-pod-vape_2145_800x600.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Smoant S8 pod vape"> <i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-pods">
            <div class="portfolio-wrap">
              <img src="https://www.jsbvape.com/wp-content/uploads/2022/12/INSBAR-Vape-Product-Video.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>VPFIT Open Pod</h4>
                <p>3.8</p>
                <div class="portfolio-links">
                  <a href="https://www.jsbvape.com/wp-content/uploads/2022/12/INSBAR-Vape-Product-Video.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="VPFIT Open Pod"> <i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></a>
                </div>
              </div>
            </div>
          </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-mods">
          <div class="portfolio-wrap">
            <img src="https://www.europeanfinancialreview.com/wp-content/uploads/2020/03/vape-mods.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Chopper Mod</h4>
              <p>5.4</p>
              <div class="portfolio-links">
                <a href="https://www.europeanfinancialreview.com/wp-content/uploads/2020/03/vape-mods.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Chopper Mod"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-mods">
            <div class="portfolio-wrap">
              <img src="https://www.dicodes-mods.com/files/dani-sbs-18650/CV2_8305-SBS.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>CBR4 Mod</h4>
                <p>5.4</p>
                <div class="portfolio-links">
                  <a href="https://www.dicodes-mods.com/files/dani-sbs-18650/CV2_8305-SBS.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="CBR4 Mod"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></a>
                </div>
              </div>
            </div>
          </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-atomizers">
          <div class="portfolio-wrap">
            <img src="https://ph-test-11.slatic.net/p/mdc/d37d873c7fa59bd68077377e0b16e3bb.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>ZEUS X Vape</h4>
              <p>2.5</p>
              <div class="portfolio-links">
                <a href="https://ph-test-11.slatic.net/p/mdc/d37d873c7fa59bd68077377e0b16e3bb.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ZEUS X Vape"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-atomizers">
            <div class="portfolio-wrap">
              <img src="https://thumbs.dreamstime.com/b/d-vape-atomizer-vaping-e-cigarette-tank-62110913.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>AK-47</h4>
                <p>2.5</p>
                <div class="portfolio-links">
                  <a href="https://thumbs.dreamstime.com/b/d-vape-atomizer-vaping-e-cigarette-tank-62110913.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="AK-47"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></i></a>
                </div>
              </div>
            </div>
          </div>
  

        <div class="col-lg-4 col-md-6 portfolio-item filter-batteries">
          <div class="portfolio-wrap">
            <img src="https://www.ybyboxes.com/wp-content/uploads/2018/09/7-18.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Snow Bleed 4</h4>
              <p>2312</p>
              <div class="portfolio-links">
                <a href="https://www.ybyboxes.com/wp-content/uploads/2018/09/7-18.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Snow Blade"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-batteries">
            <div class="portfolio-wrap">
              <img src="https://lookah.com/images/products/LOAD/DETAILS/LOAD_details6.jpg.webp?1653358417761" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Q3 Blade</h4>
                <p>344</p>
                <div class="portfolio-links">
                  <a href="https://lookah.com/images/products/LOAD/DETAILS/LOAD_details6.jpg.webp?1653358417761" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Q3 Blade"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></i></a>
                </div>
              </div>
            </div>
          </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-accessories">
          <div class="portfolio-wrap">
            <img src="https://www.emenacpackaging.com/wp-content/uploads/2021/12/Foldable-Vape-Accessories-Shipping-Boxes.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Arctic 50</h4>
              <p>231</p>
              <div class="portfolio-links">
                <a href="https://www.emenacpackaging.com/wp-content/uploads/2021/12/Foldable-Vape-Accessories-Shipping-Boxes.webp" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Arctic 50"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-accessories">
            <div class="portfolio-wrap">
              <img src="https://boxmaestro.com/wp-content/uploads/2020/10/vape-access.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>PP19 Bizon</h4>
                <p>231</p>
                <div class="portfolio-links">
                  <a href="https://boxmaestro.com/wp-content/uploads/2020/10/vape-access.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="PP19 Bizon"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"></a>
                </div>
              </div>
            </div>
          </div>

     
      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <section id="announcement" class="announcement">
    <div class="container">

      <div class="section-title">
        <h2>Announcement</h2>
        <p>Flash Sales</p>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-accessories">
          
      </div>
     
      </div>

    </div>
  </section><!-- End Portfolio Section -->



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <a class="nav-link" href="/map">Address</a> 
            <p>Butuan City, Philippines, 8600</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="https://twitter.com/blackhaven15" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/www.jiandagonay" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/jiandagonay/" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>blackhaven@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+63 927 4855 982</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section>
  
  <!-- End Contact Section -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


</html>
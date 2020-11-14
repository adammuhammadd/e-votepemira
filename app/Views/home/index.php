<?= $this->extend('layout/template1'); ?>

<?= $this->section('isicontent'); ?>
<!-- ======= Top Bar ======= -->
<?= $this->include('layout/navbar'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix">
  <div class="container d-flex h-100">
    <div class="row justify-content-center align-self-center" data-aos="fade-up">
      <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
        <h2>PEMIRA <span>2020!</span></h2>
      </div>

      <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url('rapid'); ?>/assets/img/intro-img.svg" alt="" class="img-fluid">
      </div>
    </div>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->

  <!-- ======= Services Section ======= -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container-fluid" data-aos="fade-up">

      <header class="section-header">
        <h3>Timeline PERMIRA</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem minima sed architecto quis necessitatibus commodi, molestiae neque facere reprehenderit eum, odio placeat alias hic iste consequuntur magni itaque vero laborum iure a cupiditate temporibus perspiciatis eveniet. Culpa debitis tempore nostrum reprehenderit earum iusto, reiciendis deserunt ea excepturi perspiciatis tenetur.</p>
      </header>
      <div class="container">
        <div class="main-timeline">

          <!-- start experience section-->
          <div class="timeline">
            <div class="icon"></div>
            <div class="date-content">
              <div class="date-outer">
                <span class="date">
                  <span class="month text-primary">23 November</span>
                  <span class="year text-primary">2020</span>
                </span>
              </div>
            </div>
            <div class="timeline-content">
              <h5 class="title">Pendaftaran &amp; validasi</h5>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
              </p>
            </div>
          </div>
          <!-- end experience section-->

          <!-- start experience section-->
          <div class="timeline">
            <div class="icon"></div>
            <div class="date-content">
              <div class="date-outer">
                <span class="date">
                  <span class="month text-success">25 November</span>
                  <span class="year text-success">2020</span>
                </span>
              </div>
            </div>
            <div class="timeline-content">
              <h5 class="title">Pengumuman Calon</h5>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
              </p>
            </div>
          </div>
          <!-- end experience section-->

          <!-- start experience section-->
          <div class="timeline">
            <div class="icon"></div>
            <div class="date-content">
              <div class="date-outer">
                <span class="date">
                  <span class="month text-warning">30 November</span>
                  <span class="year text-warning">2020</span>
                </span>
              </div>
            </div>
            <div class="timeline-content">
              <h5 class="title">Masa Kampanye</h5>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
              </p>
            </div>
          </div>
          <!-- end experience section-->

          <!-- start experience section-->
          <div class="timeline">
            <div class="icon"></div>
            <div class="date-content">
              <div class="date-outer">
                <span class="date">
                  <span class="month text-danger">23 Desember</span>
                  <span class="year text-danger">2020</span>
                </span>
              </div>
            </div>
            <div class="timeline-content">
              <h5 class="title">Pemilihan Presma</h5>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur ex sit amet massa scelerisque scelerisque. Aliquam erat volutpat. Aenean interdum finibus efficitur. Praesent dapibus dolor felis, eu ultrices elit molestie.
              </p>
            </div>
          </div>
          <!-- end experience section-->

        </div>
      </div>

      <div class="container">
        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">10000</span>
            <p>Jumlah mahasiswa itera</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">8361</span>
            <p>Jumlah Pemilih tetap</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">3</span>
            <p>Calon Presma</p>
          </div>
        </div>

      </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action" class="call-to-action">
    <div class="container" data-aos="zoom-out">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Call To Action</h3>
          <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#">Call To Action</a>
        </div>
      </div>

    </div>
  </section><!--  End Call To Action Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row feature-item">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
          <img src="<?= base_url('rapid'); ?>/assets/img/features-1.svg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
          <h4>Kampanye Online</h4>
          <p>
            Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
          </p>
          <p>
            Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
          </p>
        </div>
      </div>

      <div class="row feature-item mt-5 pt-5">
        <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="<?= base_url('rapid'); ?>/assets/img/features-2.svg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150">
          <h4>E-Vote</h4>
          <p>
            Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
          </p>
          <p>
            Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
          </p>
          <p>
            Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
          </p>
        </div>

      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing wow fadeInUp">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3>Calon President</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, quia.</p>
      </header>

      <div class="row flex-items-xs-middle flex-items-xs-center">

        <!-- Basic Plan  -->
        <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <div class="card-header">
              <img src="<?= base_url('rapid'); ?>/assets/img/team-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Calon 1
              </h4>
              <ul class="list-group">
                <li class="list-group-item">Fandilla Dimas Prayoga</li>
                <li class="list-group-item">118130122</li>
                <li class="list-group-item">Teknik elektro</li>
                <li class="list-group-item">deskripsi singkat</li>
              </ul>
              <a href="#" class="btn">Kunjungi Profile</a>
            </div>
          </div>
        </div>

        <!-- Regular Plan  -->
        <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card">
            <div class="card-header">
              <img src="<?= base_url('rapid'); ?>/assets/img/team-3.jpg" class="img-fluid" alt="">
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Regular Plan
              </h4>
              <ul class="list-group">
                <li class="list-group-item">Fandilla Dimas Prayoga</li>
                <li class="list-group-item">118130122</li>
                <li class="list-group-item">Teknik elektro</li>
                <li class="list-group-item">deskripsi singkat</li>
              </ul>
              <a href="#" class="btn">Kunjungi Profile</a>
            </div>
          </div>
        </div>

        <!-- Premium Plan  -->
        <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
            <div class="card-header">
              <img src="<?= base_url('rapid'); ?>/assets/img/team-4.jpg" class="img-fluid" alt="">
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Premium Plan
              </h4>
              <ul class="list-group">
                <li class="list-group-item">Fandilla Dimas Prayoga</li>
                <li class="list-group-item">118130122</li>
                <li class="list-group-item">Teknik elektro</li>
                <li class="list-group-item">deskripsi singkat</li>
              </ul>
              <a href="#" class="btn">Kunjungi Profile</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section><!-- End Pricing Section -->
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3 class="section-title">Dokumentasi PERMIRA</h3>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <!-- <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li> -->
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="<?= base_url('rapid'); ?>/assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 1</a></h4>
              <p>App</p>
              <div>
                <a href="<?= base_url('rapid'); ?>/assets/img/portfolio/app1.jpg" data-gall="portfolioGallery" title="App 1" class="link-preview venobox"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <img src="<?= base_url('rapid'); ?>/assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 3</a></h4>
              <p>Web</p>
              <div>
                <a href="<?= base_url('rapid'); ?>/assets/img/portfolio/web3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 3"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <img src="<?= base_url('rapid'); ?>/assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 2</a></h4>
              <p>App</p>
              <div>
                <a href="<?= base_url('rapid'); ?>/assets/img/portfolio/app2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 2"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="<?= base_url('rapid'); ?>/assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 2</a></h4>
              <p>Card</p>
              <div>
                <a href="<?= base_url('rapid'); ?>/assets/img/portfolio/card2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 2"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <img src="<?= base_url('rapid'); ?>/assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 2</a></h4>
              <p>Web</p>
              <div>
                <a href="<?= base_url('rapid'); ?>/assets/img/portfolio/web2.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 2"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <img src="<?= base_url('rapid'); ?>/assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">App 3</a></h4>
              <p>App</p>
              <div>
                <a href="<?= base_url('rapid'); ?>/assets/img/portfolio/app3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="App 3"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="<?= base_url('rapid'); ?>/assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 1</a></h4>
              <p>Card</p>
              <div>
                <a href="<?= base_url('rapid'); ?>/assets/img/portfolio/card1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 1"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <img src="<?= base_url('rapid'); ?>/assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Card 3</a></h4>
              <p>Card</p>
              <div>
                <a href="<?= base_url('rapid'); ?>/assets/img/portfolio/card3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Card 3"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <img src="<?= base_url('rapid'); ?>/assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Web 1</a></h4>
              <p>Web</p>
              <div>
                <a href="<?= base_url('rapid'); ?>/assets/img/portfolio/web1.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Web 1"><i class="ion ion-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

      <header class="section-header">
        <h3>Quotes</h3>
      </header>

      <div class="row justify-content-center">
        <div class="col-lg-8">

          <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <img src="<?= base_url('rapid'); ?>/assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              </p>
            </div>

            <div class="testimonial-item">
              <img src="<?= base_url('rapid'); ?>/assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              </p>
            </div>

            <div class="testimonial-item">
              <img src="<?= base_url('rapid'); ?>/assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              </p>
            </div>

            <div class="testimonial-item">
              <img src="<?= base_url('rapid'); ?>/assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              </p>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->
 <!-- ======= Clients Section ======= -->
 <section id="clients" class="clients">
     <div class="container" data-aos="zoom-in">

         <header class="section-header">
             <h3>Media Partners</h3>
         </header>

         <div class="owl-carousel clients-carousel">
             <img src="<?= base_url('rapid'); ?>/assets/img/clients/client-1.png" alt="">
             <img src="<?= base_url('rapid'); ?>/assets/img/clients/client-2.png" alt="">
             <img src="<?= base_url('rapid'); ?>/assets/img/clients/client-3.png" alt="">
             <img src="<?= base_url('rapid'); ?>/assets/img/clients/client-4.png" alt="">
             <img src="<?= base_url('rapid'); ?>/assets/img/clients/client-5.png" alt="">
             <img src="<?= base_url('rapid'); ?>/assets/img/clients/client-6.png" alt="">
             <img src="<?= base_url('rapid'); ?>/assets/img/clients/client-7.png" alt="">
             <img src="<?= base_url('rapid'); ?>/assets/img/clients/client-8.png" alt="">
         </div>

     </div>
 </section><!-- End Clients Section -->

<!-- ======= Footer ======= -->
<footer id="footer" class="section-bg">
  <div class="footer-top">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">

          <div class="row">

            <div class="col-sm-6">

              <div class="footer-info">
                <h3>PERMIRA</h3>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              </div>

              <div class="footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
              </div>

            </div>

            <div class="col-sm-6">
              <div class="footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#about">About us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Terms of service</a></li>
                  <li><a href="#">Privacy policy</a></li>
                </ul>
              </div>

              <div class="footer-links">
                <h4>Contact Us</h4>
                <p>
                  A108 Adam Street <br>
                  New York, NY 535022<br>
                  United States <br>
                  <strong>Phone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> info@example.com<br>
                </p>
              </div>

              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>

            </div>

          </div>

        </div>

        <div class="col-lg-6">

          <div class="form">

            <h4>Send us a message</h4>
            <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>

              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>

              <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>

    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>PERMIRA</strong>
    </div>
  </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<?= $this->endSection(); ?>
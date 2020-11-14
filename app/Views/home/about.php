<?= $this->extend('layout/template1'); ?>

<?= $this->section('isicontent'); ?>
<!-- ======= Top Bar ======= -->
<?= $this->include('layout/navbar'); ?>
<!-- ======= Hero Section ======= -->
<section id="about" class="about">

    <div class="container" data-aos="fade-up">
        <div class="row">

            <div class="col-lg-5 col-md-6">
                <div class="about-img" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?= base_url('rapid'); ?>/assets/img/about-img.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                    <h2>Apa itu PEMIRA</h2>
                    <h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>
                    <ul>
                        <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section><!-- End About Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h3>Team Developer</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                    <img src="<?= base_url('rapid'); ?>/assets/img/team-1.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="member">
                    <img src="<?= base_url('rapid'); ?>/assets/img/team-2.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="member">
                    <img src="<?= base_url('rapid'); ?>/assets/img/team-3.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="member">
                    <img src="<?= base_url('rapid'); ?>/assets/img/team-4.jpg" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Team Section -->


<?= $this->endSection(); ?>
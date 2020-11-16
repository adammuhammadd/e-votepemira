<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rapid Bootstrap Template - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('rapid'); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('rapid'); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('rapid'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('rapid'); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('rapid'); ?>/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= base_url('rapid'); ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('rapid'); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('rapid'); ?>/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('rapid'); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url('rapid'); ?>/assets/css/timline.css" rel="stylesheet">
    <link href="<?= base_url('grafik') ?>/css/jquery.simple-bar-graph.min.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Top Bar ======= -->
    <?= $this->include('layout/navbar'); ?>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="<?= base_url('home/index'); ?>">Home</a></li>
                    <li>Quick Count</li>
                </ol>
                <h2>Quick Count</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel, dolores, officia debitis, corporis incidunt a cumque vitae veritatis nobis temporibus impedit. Officia consequuntur maxime, accusantium maiores, doloribus blanditiis, laborum rerum commodi consectetur atque sequi fuga dolor provident ut reiciendis laboriosam perferendis tempora officiis a rem sunt aliquid minus quidem. Earum neque exercitationem repellat minus voluptas non maxime? Ad provident officia nulla culpa eveniet dicta, quaerat quas alias? Cupiditate distinctio nostrum iste, quaerat ullam aliquid. Totam est et tempora ad consequatur ea exercitationem consectetur reiciendis commodi eos a voluptatibus, magni numquam voluptates, quos adipisci vitae sapiente? Temporibus doloremque magnam ipsam eum.</p>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <div class="container">
                    <section class="py-5">
                        <div class="container">
                            <div class="row pricing" id="mycoba">
                                <!-- Free Tier -->
                                <div class="col-lg-12 mb-5">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                            <strong>Hasil Perhitungan suara</strong>
                                            <div id="example-one">Loading...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->
        <section id="why-us" class="why-us breadcrumbs">
            <div class="container-fluid" data-aos="fade-up">

                <div class="container">
                    <div class="row counters" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-lg-4 col-6 text-center">
                            <span data-toggle="counter-up">12400</span>
                            <p>Jumlah mahasiswa itera</p>
                        </div>

                        <div class="col-lg-4 col-6 text-center">
                            <span data-toggle="counter-up">11319</span>
                            <p>Jumlah Pemilih</p>
                        </div>

                        <div class="col-lg-4 col-6 text-center">
                            <span data-toggle="counter-up">1081</span>
                            <p>Golput</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main><!-- End #main -->
    <script src="<?= base_url('rapid'); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('rapid'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('rapid'); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('rapid'); ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url('rapid'); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('rapid'); ?>/assets/vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url('rapid'); ?>/assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url('rapid'); ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('rapid'); ?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('rapid'); ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('grafik') ?>/js/jquery.simple-bar-graph.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('rapid'); ?>/assets/js/main.js"></script>

    <script>
        $('#example-one').simpleBarGraph({
            data: [{
                    key: 'Calon 1',
                    value: 2198
                },
                {
                    key: 'Calon 2',
                    value: 2230
                },
                {
                    key: 'Calon 3',
                    value: 6891
                }
            ],
            height: "400px",
            delay: 10,
            barsColor: "#3D9970"
        });
    </script>

</body>

</html>
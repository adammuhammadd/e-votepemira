<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PEMIRA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('rapid') ;?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url('rapid') ;?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('rapid') ;?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('rapid') ;?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url('rapid') ;?>/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url('rapid') ;?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url('rapid') ;?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('rapid') ;?>/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('rapid') ;?>/assets/css/style.css" rel="stylesheet">
  <link href="<?= base_url('rapid') ;?>/assets/css/timline.css" rel="stylesheet">
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
                <li>Voting</li>
            </ol>
            <h2>Voting</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="pricing" class="pricing wow fadeInUp">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Calon President</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, quia.</p>
            </header>

            <div class="row flex-items-xs-middle flex-items-xs-center">

                <!-- Calon 1  -->
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
                            <a class="btn btn-outline-pimary" href="" data-toggle="modal" data-whatever="<?= base_url('vote/pilih/1/') ?>" data-target="#pilihanModal">Dukung</a>
                        </div>
                    </div>
                </div>

                <!-- Calon 2 -->
                <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('rapid'); ?>/assets/img/team-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">
                                Calon 2
                            </h4>
                            <ul class="list-group">
                                <li class="list-group-item">Fandilla Dimas Prayoga</li>
                                <li class="list-group-item">118130122</li>
                                <li class="list-group-item">Teknik elektro</li>
                                <li class="list-group-item">deskripsi singkat</li>
                            </ul>
                            <a class="btn btn-outline-primary" href="" data-toggle="modal" data-whatever="<?= base_url('vote/pilih/2/') ?>" data-target="#pilihanModal">Dukung</a>
                        </div>
                    </div>
                </div>

                <!--Calon 3 -->
                <div class="col-xs-12 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('rapid'); ?>/assets/img/team-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">
                                Calon 3
                            </h4>
                            <ul class="list-group">
                                <li class="list-group-item">Fandilla Dimas Prayoga</li>
                                <li class="list-group-item">118130122</li>
                                <li class="list-group-item">Teknik elektro</li>
                                <li class="list-group-item">deskripsi singkat</li>
                            </ul>
                            <a class="btn btn-outline-primary" href="" data-toggle="modal" data-whatever="<?= base_url('vote/pilih/3/') ?>" data-target="#pilihanModal">Dukung</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- End Pricing Section -->

    <!-- modal pilihan -->
    <div class="modal fade" id="pilihanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah kamu yakin memilih Calon ini ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "yakin" jika kamu benar ingin memilih Calon ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a id="pilih" class="btn btn-primary" href="">Yakin</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->
</main>
<!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="<?= base_url('rapid') ;?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('rapid') ;?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('rapid') ;?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('rapid') ;?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('rapid') ;?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('rapid') ;?>/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url('rapid') ;?>/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url('rapid') ;?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('rapid') ;?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('rapid') ;?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url('grafik') ?>/js/jquery.simple-bar-graph.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('rapid') ;?>/assets/js/main.js"></script>
  <script>
    $('#pilihanModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#pilih').attr('href', recipient);

    })
</script>

</body>

</html>
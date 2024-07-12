<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing page</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url('/public/plugins/fontawesome-free/css/all.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('/public/dist/css/adminlte.min.css?v=3.2.0') ?>">

    <!-- calender -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="" class="navbar-brand">
                <img src="<?= base_url('/public/dist/img/2.png') ?>" alt="AdminLTE Logo" class="brand-image  elevation-3" style="opacity: .8; width: 150px; height: auto;">
                    <span class="brand-text font-weight-light"></span>
                </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse order-3" id="navbarCollapse">

                </div>

                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-info text-white" href="<?= base_url('login') ?>">
                            <i class="fas fa-share"></i><b> Login</b>
                            <!-- <button class="btn btn-info btn-sm"><i class="fas fa-share"></i><b> Login</b></button> -->
                        </a>
                        <p>Silahkan melakukan login disini</p>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="content-wrapper">

            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">

                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Kalender Agenda</h5>

                                    <div class="response"></div>
                                    <div id='calendar'></div>
                                </div>
                            </div>
                            <!-- <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the card's
                                        content.
                                    </p>
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div> -->
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <!-- <div class="card card-primary card-outline">
                                    <h5 class="card-title m-0">Keterangan</h5>
                                </div> -->
                                <!--  -->
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Keterangan Kalender</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title"></h6>

                                    <p class="card-text">
                                        1. Silahkan klik pada bagian tanggal di kalender yang ada button berwarnanya, maka nanti akan muncul notif keterangan <br>

                                    </p>
                                    <p>
                                        2. Jika berwarna kuning maka data belum di bayar dan masih bisa di boking <br>

                                    </p>
                                    <p class="card-text">
                                        3. Jika berwarna hijau maka pada lapangan, tanggal dan jam tersebut sudah di booking orang lain
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                    <div class="col-lg-4">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5 class="card-title display-4"><b>Lapangan 1</b></h5>
                                    <p class="card-text mt-3">
                                        Lapangan dengan vinnyl dan finishing yang berstandar nasional
                                    </p>
                                    <!-- Tambahkan elemen img untuk menampilkan gambar -->
                                    <img src="<?= base_url('public/image/lapangan_1.jpg') ?>" class="img-fluid" alt="Image">
                                    <!-- Tombol untuk membuka modal saat gambar diklik -->
                                    <a href="#" class="card-link btn btn-success mt-3" data-toggle="modal" data-target="#imageModal">Preview Image</a>
                                </div>
                            </div>
                        </div>

                        <!-- Modal untuk menampilkan gambar secara lebih besar -->
                        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Tempatkan gambar di sini -->
                                        <img src="<?= base_url('public/image/lapangan_1.jpg') ?>" class="img-fluid" alt="Image">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5 class="card-title display-4"><b>Lapangan 2</b></h5>
                                    <p class="card-text mt-3">
                                        Lapangan dengan vinnyl dan finishing yang berstandar nasional
                                    </p>
                                    <!-- Tambahkan elemen img untuk menampilkan gambar -->
                                    <img src="<?= base_url('public/image/lapangan_1.jpg') ?>" class="img-fluid" alt="Image">
                                    <!-- Tombol untuk membuka modal saat gambar diklik -->
                                    <a href="#" class="card-link btn btn-success mt-3" data-toggle="modal" data-target="#imageModal">Preview Image</a>
                                </div>
                            </div>
                        </div>

                        <!-- Modal untuk menampilkan gambar secara lebih besar -->
                        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Tempatkan gambar di sini -->
                                        <img src="<?= base_url('public/image/lapangan_1.jpg') ?>" class="img-fluid" alt="Image">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5 class="card-title display-4"><b>Lapangan 3</b></h5>
                                    <p class="card-text mt-3">
                                        Lapangan dengan vinnyl dan finishing yang berstandar nasional
                                    </p>
                                    <!-- Tambahkan elemen img untuk menampilkan gambar -->
                                    <img src="<?= base_url('public/image/lapangan_1.jpg') ?>" class="img-fluid" alt="Image">
                                    <!-- Tombol untuk membuka modal saat gambar diklik -->
                                    <a href="#" class="card-link btn btn-success mt-3" data-toggle="modal" data-target="#imageModal">Preview Image</a>
                                </div>
                            </div>
                        </div>

                        <!-- Modal untuk menampilkan gambar secara lebih besar -->
                        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Tempatkan gambar di sini -->
                                        <img src="<?= base_url('public/image/lapangan_1.jpg') ?>" class="img-fluid" alt="Image">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="main-footer">

            <!-- <div class="float-right d-none d-sm-inline">
                Anything you want
            </div> -->

            <strong>Copyright &copy; 2024 <a href="#">Subagja-Dev</a>.</strong>.
        </footer>
    </div>

    <!-- calender -->
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: [
                    // Data booking dari CodeIgniter
                    <?php foreach ($bookings as $booking) : ?> {
                            title: '<?= $booking['nama_user'] ?>',
                            start: '<?= $booking['tanggal'] . ' ' . $booking['jam_mulai'] ?>',
                            end: '<?= $booking['tanggal'] . ' ' . $booking['jam_selesai'] ?>',
                            description: 'Lapangan: <?= $booking['nama_lap'] ?>, Status: <?= $booking['id_approve'] == 2 ? 'Sudah di bayar' : 'Belum di bayar' ?>, Jam Mulai: <?= $booking['jam_mulai'] ?>, Jam Selesai: <?= $booking['jam_selesai'] ?>',
                            color: '<?= $booking['id_approve'] == 2 ? 'green' : 'orange' ?>' // Atur warna berdasarkan status pembayaran
                        },
                    <?php endforeach; ?>
                ],
                eventClick: function(event) {
                    // Tindakan saat mengklik event (tampilkan info, dll.)
                    alert(event.description);
                }
            });
        });
    </script>




    <!-- end calender -->

    <script src="<?= base_url('/public/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <script src="<?= base_url('/public/dist/js/adminlte.min.js?v=3.2.0') ?>"></script>
</body>

</html>
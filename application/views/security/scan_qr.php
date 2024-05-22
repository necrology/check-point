<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SCAN QR - Security Check Point</title>
    <link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?php echo base_url() . 'scan_qr' ?>">Security Check-Point</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <!-- <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div> -->
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?php echo base_url() . 'login/logout' ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Scan QR</div>
                        <a class="nav-link active" href="<?php echo base_url() . 'scan_qr' ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-qrcode"></i></div>
                            Scan QR Check-Point
                        </a>
                        <a class="nav-link" href="<?php echo base_url() . 'hasil_scan' ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-check"></i></div>
                            Hasil Check-Point
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as: </div>
                    <?php echo $_SESSION['nama_user']; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">SCAN QR</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Scan QR Security Check-Point</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div>
                                <p><?php echo $this->session->flashdata('msg'); ?></p>
                            </div>
                            <form action="<?php echo base_url() . 'scan_qr/simpan_data' ?>" id="form" class="form-horizontal" method="post">
                                <div class="form-body">
                                    <div class="floating mb-3">
                                        <select class="form-select" name="sesi_check_point" aria-label="Default select example">
                                            <option selected>Check Poin Ke -</option>
                                            <option value="sesi 1">Sesi 1</option>
                                            <option value="sesi 2">Sesi 2</option>
                                            <option value="sesi 3">Sesi 3</option>
                                            <option value="sesi 4">Sesi 4</option>
                                            <option value="sesi 5">Sesi 5</option>
                                            <option value="sesi 6">Sesi 6</option>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-1">
                                        <!-- <div id="my_camera"></div> -->
                                        <!-- <video id="preview" width="100%"></video> -->
                                        <div class="collapse" id="collapseExample">
                                            <div class="card card-body">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="floating mb-3">
                                        <input type="button" class="btn btn-primary" onClick="scan()" value="Scan">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="area" name="area" type="text" placeholder="Area" readonly required />
                                        <label for="inputArea">Area</label>
                                    </div>
                                    <div class="floating mb-3">
                                        <input type="button" class="btn btn-success" onClick="photo()" value="Photo">
                                    </div>
                                    <div class="floating mb-3">
                                        <input type="hidden" name="image" class="image-tag">
                                    </div>
                                    <div class="floating mb-3">
                                        <div class="col-md-6">
                                            <div src="" id="results">Bukti Photo akan tampil disini...</div>
                                        </div>
                                    </div>
                                    <div class="floating mb-3">
                                        <div class="col-md-6">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                            <textarea name="keterangan" class="form-control" id="TextAreaKeterangan" rows="4" required></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <div class="floating mb-3">
                                            <input type="submit" class="btn btn-primary" value="Kirim">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Check-Point UBK 2022</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Modal Scan BARCODE QR -->
    <div class="modal fade" id="modal_scan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">SCAN QR CODE</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onClick="scan_tutup()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body form">
                    <form id="form" class="form-horizontal">
                        <input type="hidden" value="" name="id" />
                        <div class="form-body">
                            <video id="preview" width="100%"></video>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                </div>
                                <!--card card-body-->
                            </div>
                            <!--collapse-->
                        </div>
                        <!--form body-->
                    </form>
                </div>
                <!--modal-body-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal PHOTO BUKTI -->
    <div class="modal fade" id="modal_photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PHOTO BUKTI</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onClick="tutup_photo()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body form">
                    <form id="form" class="form-horizontal">
                        <input type="hidden" value="" name="id" />
                        <div class="form-body">
                            <div class="floating mb-3">
                                <div id="my_camera"></div>
                            </div>
                            <div class="floating mb-3">
                                <input type="button" class="btn btn-success" onClick="take_snapshot()" value="Photo">
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                </div>
                                <!--card card-body-->
                            </div>
                            <!--collapse-->
                        </div>
                        <!--form body-->
                    </form>
                </div>
                <!--modal-body-->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="assets/demo/chart-pie-demo.js"></script>
</body>
<scrip type="text/javascript">
    <script>
        function photo() {
            $('.modal-title').text('PHOTO BUKTI');
            $('#modal_photo').modal('show');
            Webcam.set({
                width: 313,
                height: 390,
                image_format: 'jpeg',
                jpeg_quality: 90,
                flip_horiz: true,
                facingMode: "environment"
            }, );
            Webcam.set('constraints', {
                facingMode: "environment"
            });
            Webcam.attach('#my_camera');
        }

        function tutup_photo() {
            Webcam.reset();
        }

        function scan_tutup() {}

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img src="' + data_uri + '" class="img-thumbnail" />';
            });
            $('#modal_photo').modal('hide');
            Webcam.reset();
        }

        function scan() {
            $('.modal-title').text('SCAN QR CODE');
            $('#modal_scan').modal('show');
            let scanner = new Instascan.Scanner({
                mirror: false,
                video: document.getElementById('preview')
            });
            scanner.addListener('scan', function(content) {
                document.getElementById("area").value = content;
                scanner.stop();
                $('#modal_scan').modal('hide');
                // alert(content);
            });
            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[1]);
                } else {
                    console.error('No cameras found.');
                }
            }).catch(function(e) {
                console.error(e);
            });
        }
    </script>

</html>
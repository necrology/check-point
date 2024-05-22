<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Hasil SCAN QR - Security Check Point</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?php echo base_url() . 'css/styles.css'?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha512-Velp0ebMKjcd9RiCoaHhLXkR1sFoCCWXNp6w4zj1hfMifYB5441C+sKeBl/T/Ka6NjBiRfBBQRaQq65ekYz3UQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha512-YibiFIKqwi6sZFfPm5HNHQYemJwFbyyYHjrr3UT+VobMt/YBo1kBxgui5RWc4C3B4RJMYCdCAJkbXHt+irKfSA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?php echo base_url() . 'scan_qr' ?>">Security Check-Point</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

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
                        <a class="nav-link" href="<?php echo base_url() . 'scan_qr' ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-qrcode"></i></div>
                            Scan QR Check-Point
                        </a>
                        <a class="nav-link active" href="<?php echo base_url() . 'hasil_scan' ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-check"></i></div>
                            Hasil Check-Point
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?php echo $_SESSION['nama_user']; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Hasil Check-Point</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Hasil Data Check-Point Wilayah</li>
                    </ol>
                    <form action="<?php echo base_url() . 'hasil_scan/lihat_data' ?>" method="post">
                        <div class="form-group row floating mb-2">
                            <label for="data_awal" class="col-sm-2 col-form-label">Dari Tanggal :</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" class="form-control" id="data_awal" name="data_awal">
                            </div>
                        </div>
                        <div class="form-group row floating mb-2">
                            <label for="data_akhir" class="col-sm-2 col-form-label">Sampai Tanggal :</label>
                            <div class="col-sm-10">
                                <input type="datetime-local" class="form-control" id="data_akhir" name="data_akhir">
                            </div>
                        </div>
                        <div class="floating mb-3 text-center">
                            <input type="submit" class="btn btn-primary" value="Lihat">
                        </div>
                    </form>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Check-Point
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Area</th>
                                            <th>Sesi Check-Point</th>
                                            <th>Nama Pemeriksa</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Area</th>
                                            <th>Sesi Check-Point</th>
                                            <th>Nama Pemeriksa</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($data->result_array() as $i) :
                                            $tanggal_waktu = $i['tanggal_waktu'];
                                            $nama_pemeriksa = $i['nama_pemeriksa'];
                                            $sesi_check_point = $i['sesi_check_point'];
                                            $area = $i['area'];
                                            $keterangan = $i['keterangan'];
                                        ?>
                                            <tr>
                                                <td><?php echo $area; ?></td>
                                                <td><?php echo $sesi_check_point; ?></td>
                                                <td><?php echo $nama_pemeriksa; ?></td>
                                                <td><?php echo $keterangan; ?></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() . 'js/scripts.js'?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?php echo base_url() . 'js/datatables-simple-demo.js'?>"></script>
    <script>
        $(document).ready(function() {
            $('#datatablesSimple').DataTable();
        });

        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    </script>
</body>


</html>
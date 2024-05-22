<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah Data User - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?php echo base_url() . 'css/styles.css' ?>" rel="stylesheet" />
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
        <a class="navbar-brand ps-3" href="index.html">Security Check-Point</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
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
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?php echo base_url() . 'dashboard' ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                            Data Check-Point
                        </a>
                        <a class="nav-link" href="<?php echo base_url() . 'user' ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                            Data User
                        </a>
                        <a class="nav-link" href="<?php echo base_url() . 'data_jadwal' ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-clock"></i></div>
                            Data Jadwal Sesi
                        </a>
                        <a class="nav-link active" href="<?php echo base_url() . 'data_paket_jadwal' ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-box"></i></div>
                            Data Paket Jadwal
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
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
                    <h1 class="mt-4">Tambah Data Paket Jadwal</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Data Paket Jadwal</li>
                        <li class="breadcrumb-item active">Tambah Data Paket Jadwal</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fa-solid fa-users"></i>
                            Tambah Data Paket
                        </div>

                        <div class="card-body">
                            <form action="<?php echo base_url() . 'data_paket_jadwal/update_paket' ?>" method="post">
                                <div class="form-group row floating mb-2">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama Paket :</label>
                                    <?php foreach ($sesi1 as $i) { ?>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="nama" name="NamaPaket" placeholder="Nama Paket" value="<?php echo $i->paket; ?>" required>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="form-group row floating mb-2">
                                    <?php foreach ($sesi1 as $i) :
                                        $paket = $i->paket;
                                        $jam_awal_sesi1 = $i->jam_awal;
                                        $jam_akhir_sesi1 = $i->jam_akhir;
                                    ?>
                                        <label for="nama" class="col-sm-2 col-form-label">Sesi 1</label>
                                        <div class="form-group row floating mb-2">
                                            <label for="nama" class="col-sm-2 col-form-label">Jam Awal :</label>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" id="data_awal" name="sesi1_jam_awal" value="<?php echo $jam_awal_sesi1 ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row floating mb-2">
                                            <label for="nama" class="col-sm-2 col-form-label">Jam Akhir :</label>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" id="data_awal" name="sesi1_jam_akhir" value="<?php echo $jam_akhir_sesi1 ?>">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <?php foreach ($sesi2 as $i) :
                                    $jam_awal_sesi2 = $i->jam_awal;
                                    $jam_akhir_sesi2 = $i->jam_akhir;
                                ?>
                                    <div class="form-group row floating mb-2">
                                        <label for="nama" class="col-sm-2 col-form-label">Sesi 2</label>
                                        <div class="form-group row floating mb-2">
                                            <label for="nama" class="col-sm-2 col-form-label">Jam Awal :</label>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" id="data_awal" name="sesi2_jam_awal" value="<?php echo $jam_awal_sesi2 ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row floating mb-2">
                                            <label for="nama" class="col-sm-2 col-form-label">Jam Akhir :</label>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" id="data_awal" name="sesi2_jam_akhir" value="<?php echo $jam_akhir_sesi2 ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <?php foreach ($sesi3 as $i) :
                                    $jam_awal_sesi3 = $i->jam_awal;
                                    $jam_akhir_sesi3 = $i->jam_akhir;
                                ?>
                                    <div class="form-group row floating mb-2">
                                        <label for="nama" class="col-sm-2 col-form-label">Sesi 3</label>
                                        <div class="form-group row floating mb-2">
                                            <label for="nama" class="col-sm-2 col-form-label">Jam Awal :</label>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" id="data_awal" name="sesi3_jam_awal" value="<?php echo $jam_awal_sesi3 ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row floating mb-2">
                                            <label for="nama" class="col-sm-2 col-form-label">Jam Akhir :</label>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" id="data_awal" name="sesi3_jam_akhir" value="<?php echo $jam_akhir_sesi3 ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <?php foreach ($sesi4 as $i) :
                                    $jam_awal_sesi4 = $i->jam_awal;
                                    $jam_akhir_sesi4 = $i->jam_akhir;
                                ?>
                                    <div class="form-group row floating mb-2">
                                        <label for="nama" class="col-sm-2 col-form-label">Sesi 4</label>
                                        <div class="form-group row floating mb-2">
                                            <label for="nama" class="col-sm-2 col-form-label">Jam Awal :</label>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" id="data_awal" name="sesi4_jam_awal" value="<?php echo $jam_awal_sesi4 ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row floating mb-2">
                                            <label for="nama" class="col-sm-2 col-form-label">Jam Akhir :</label>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" id="data_awal" name="sesi4_jam_akhir" value="<?php echo $jam_akhir_sesi4 ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <?php foreach ($sesi5 as $i) :
                                    $jam_awal_sesi5 = $i->jam_awal;
                                    $jam_akhir_sesi5 = $i->jam_akhir;
                                ?>
                                    <div class="form-group row floating mb-2">
                                        <label for="nama" class="col-sm-2 col-form-label">Sesi 5</label>
                                        <div class="form-group row floating mb-2">
                                            <label for="nama" class="col-sm-2 col-form-label">Jam Awal :</label>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" id="data_awal" name="sesi5_jam_awal" value="<?php echo $jam_awal_sesi5 ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row floating mb-2">
                                            <label for="nama" class="col-sm-2 col-form-label">Jam Akhir :</label>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" id="data_awal" name="sesi5_jam_akhir" value="<?php echo $jam_akhir_sesi5 ?>">
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                
                                <?php foreach ($sesi6 as $i) :
                                    $jam_awal_sesi6 = $i->jam_awal;
                                    $jam_akhir_sesi6 = $i->jam_akhir;
                                ?>
                                <div class="form-group row floating mb-2">
                                    <label for="nama" class="col-sm-2 col-form-label">Sesi 6</label>
                                    <div class="form-group row floating mb-2">
                                        <label for="nama" class="col-sm-2 col-form-label">Jam Awal :</label>
                                        <div class="col-sm-5">
                                            <input type="time" class="form-control" id="data_awal" name="sesi6_jam_awal" value="<?php echo $jam_awal_sesi6 ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row floating mb-2">
                                        <label for="nama" class="col-sm-2 col-form-label">Jam Akhir :</label>
                                        <div class="col-sm-5">
                                            <input type="time" class="form-control" id="data_awal" name="sesi6_jam_akhir" value="<?php echo $jam_akhir_sesi6 ?>">
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                                <div class="form-group row floating mb-2">
                                    <div class="mt-4 mb-0">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
                                        <a href="<?php echo base_url() . 'data_paket_jadwal' ?>" class="btn btn-danger">Batal</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
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
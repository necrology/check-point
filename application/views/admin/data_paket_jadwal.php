<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data Jadwal Sesi - Admin</title>
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
        <a class="navbar-brand ps-3" href="<?php echo base_url() . 'dashboard' ?>">Security Check-Point</a>
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
                            Jadwal Di Terapkan
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
                    <h1 class="mt-4">Data Jadwal Sesi</h1>
                    <ol class="breadcrumb mb-3">
                        <li class="breadcrumb-item">Data Jadwal Sesi</li>
                    </ol>
                    <div>
                        <p><?php echo $this->session->flashdata('msg'); ?></p>
                    </div>
                    <form action="<?php echo base_url() . 'data_paket_jadwal/tampilkan' ?>" id="form" class="form-horizontal" method="post">
                        <div class="form-body">
                            <div class="floating mb-4">
                                <div class="form-group row floating mb-2">
                                    <label for="data_awal" class="col-sm-2 col-form-label">Paket Jadwal :</label>
                                    <div class="col-sm-5">
                                        <select class="form-select" name="tampilkan_sesi" aria-label="Default select example">
                                            <?php foreach ($paket->result_array() as $x) { ?>
                                                <option value="<?php echo $x['paket']; ?>"><?php echo $x['paket']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="floating mb-3 text-center">
                                    <input type="submit" class="btn btn-primary" value="        Tampilkan        ">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="floating mb-3">
                        <a class="btn btn-success" href="<?php echo base_url() . 'add_data_paket' ?>"><i class="fa-solid fa-plus"></i> Tambah Data Paket</a>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data User
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>ID Paket</th>
                                        <th>Paket</th>
                                        <th>SESI</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>OPSI</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID Paket</th>
                                        <th>Paket</th>
                                        <th>SESI</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>OPSI</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($table->result_array() as $i) :
                                        $id_paket = $i['id_paket'];
                                        $paket = $i['paket'];
                                        $sesi = $i['sesi'];
                                        $jam_awal = $i['jam_awal'];
                                        $jam_akhir = $i['jam_akhir'];
                                    ?>
                                        <tr>
                                            <td><?php echo $id_paket ?></td>
                                            <td><?php echo $paket ?></td>
                                            <td><?php echo $sesi; ?></td>
                                            <td><?php echo $jam_awal; ?></td>
                                            <td><?php echo $jam_akhir; ?></td>
                                            <td>
                                                <a href="<?php echo base_url(); ?>data_paket_jadwal/edit_data_paket/<?php echo $id_paket; ?>" class="btn btn-warning center">Edit</a>
                                                <a href="<?php echo base_url(); ?>data_paket_jadwal/hapus_paket/<?php echo $paket; ?>" class="btn btn-danger center">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
    <script src="<?php echo base_url() . 'js/scripts.js' ?>"></script>
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
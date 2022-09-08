<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sertifikat</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    
    <!-- Custom styles for this page -->
    <link href="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('admin'); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Aset Academy</div>
            </a>

            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                interface
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin'); ?>">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Sertifikat</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('login/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li> 

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="<?php echo site_url() ?>" target="_blank">
                                <i class="fas fa-globe fa-fw"></i>
                            </a>
                        </li>
                    
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama'); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url();?>assets/admin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('login/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Sertifikat</h1>
                    <?php echo $this->session->flashdata('sukses') ?>
                    <?php echo $this->session->flashdata('gagal') ?>
                    <?php echo $this->session->flashdata('hapus') ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="row justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary p-2">data penerima sertifikat</h6>
                                    <a href="" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#tambah">
                                      <span class="icon text-white-50">
                                        <i class="fas fa-plus" aria-hidden="true"></i>
                                      </span>
                                      <span class="text">Tambah</span>
                                    </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama</th>
                                                    <th>NIM</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                        $no=1;
                                                        foreach($serti as $data){
                                                    ?>
                                                    <td><?php echo $no++;?></td>
                                                    <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                                    <td><?php echo htmlentities($data->nim, ENT_QUOTES, 'UTF-8');?></td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>assets/file/<?php echo $data->serti;?>" class="btn btn-primary btn-icon-split btn-sm" target="_blank">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-file-alt" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="text">lihat</span>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#edit<?php echo $data->id;?>" class="btn btn-warning btn-icon-split btn-sm">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-pen" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="text">Edit</span>
                                                        </a>
                                                                    <!-- Modal edit-->
                                                                        <div class="modal fade" id="edit<?php echo $data->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Serifikat</h5>
                                                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                                            <span aria-hidden="true">×</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form method="POST" action="<?php echo base_url(); ?>admin/edit" enctype="multipart/form-data">
                                                                                        <input type="hidden" value="<?php echo $data->id?>" name="id">
                                                                                        <div class="form-group row">
                                                                                            <label for="nama" class="col-sm-3 col-form-label">Nama :</label>
                                                                                                <div class="col-sm-9">
                                                                                                <input type="text" class="form-control" id="input" placeholder="keterangan" value="<?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?>" name="nama" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                            <label for="nama" class="col-sm-3 col-form-label">NIM:</label>
                                                                                                <div class="col-sm-9">
                                                                                                <input type="text" class="form-control" id="input" value="<?php echo htmlentities($data->nim, ENT_QUOTES, 'UTF-8');?>" placeholder="keterangan" name="nim" required="">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    <div class="modal-footer">
                                                                                        <a class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                                                                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <!---------------->
                                                        <a href="<?php echo base_url(); ?>admin/hapus/<?php echo $data->id;?>" class="btn btn-danger btn-icon-split btn-sm" onclick="return confirm('Yakin Hapus?')">
                                                            <span class="icon text-white-50">
                                                                <i class="fas fa-trash" aria-hidden="true"></i>
                                                            </span>
                                                            <span class="text">Hapus</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                    <?php
                                                        }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            
            <!-- Modal edit-->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Sertifikat</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                          <div class="modal-body">
                              <form method="POST" action="<?php echo base_url(); ?>admin/tambah" enctype="multipart/form-data">
                              <div class="form-group row">
                                  <label for="nama" class="col-sm-3 col-form-label">Nama :</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="input" placeholder="keterangan" name="nama" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="nama" class="col-sm-3 col-form-label">NIM:</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="input" placeholder="keterangan" name="nim" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input" class="col-sm-3 col-form-label">Sertifikat :</label>
                                    <div class="col-sm-9">
                                      <input type="file" class="form-control-file" id="input" name="serti" required="">
                                    </div>
                                </div>
                          </div>
                        <div class="modal-footer">
                            <a class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal tambah-->
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Foto</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                          <div class="modal-body">
                              <form method="POST" action="<?php echo base_url(); ?>admin/tambah" enctype="multipart/form-data">
                              <div class="form-group row">
                                  <label for="nama" class="col-sm-3 col-form-label">Nama :</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="input" placeholder="keterangan" name="nama" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="nama" class="col-sm-3 col-form-label">NIM:</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="input" placeholder="keterangan" name="nim" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  <label for="input" class="col-sm-3 col-form-label">Sertifikat :</label>
                                    <div class="col-sm-9">
                                      <input type="file" class="form-control-file" id="input" name="serti" required="">
                                    </div>
                                </div>
                          </div>
                        <div class="modal-footer">
                            <a class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Aset Academy 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>assets/admin/js/demo/datatables-demo.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/admin/js/sb-admin-2.min.js"></script>

</body>

</html>
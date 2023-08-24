<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Keluar</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url();?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url();?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?=$this->include('templates/sidebar');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <?=$this->include('templates/topbar');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?=$this->renderSection('page-content');?>
                <!-- /.container-fluid -->

                <h1><div class="d-flex justify-content-center">DATA KELUAR</div></h1>
                <table class="table">
                <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
  <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <form class="d-flex justify-content-right" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    
      </div>
    </nav>
  </div>
</nav>
  <thead>
    <tr>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Stok Awal</th>
      <th scope="col">Stok Keluar</th>
      <th scope="col">Jumlah Stok</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Action</th>

    </tr> 
  </thead>
  <tbody>
    <?php $i = 1;?>
    <tr>
       <tr>
      <th scope="row"><?=$i++;?></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><div class="d-grid gap-2 d-md-block">
  <button class="btn btn-primary" type="button">Button</button>
  <button class="btn btn-primary" type="button">Button</button>
</div></td>
      </tr>
      
    
  </tbody>
</table>
<div class=" text-right ">

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-blue">
            <div class="mt-auto p-2">
                    <div class=" text-right ">

                    <button type="button" class="btn btn-primary">Primary</button>

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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=base_url('logout');?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url();?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>/js/sb-admin-2.min.js"></script>

</body>

</html>
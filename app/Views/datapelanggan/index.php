<?=$this->extend('templates/index');?>

<?=$this->section('page-content');?>


                <h1><div class="d-flex justify-content-center">DATA PELANGGAN</div></h1>
                <table class="table">
                <button class="btn btn-primary mb-3" type="button" data-toggle="modal" data-target="#modeTambah"> + TAMBAH DATA </button>
  <!-- <?php if (session()->getFlashdata('pesan')): ?>
    <div class="alert alert-primary" role="alert">
       <?=session()->getFlashdata('pesan');?>
    </div>
  <?php endif;?> -->

  <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Nomor Telpon</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kode Pelanggan</th>
    </tr>
  </thead>
  <tbody>
  <tbody>
    <?php $i = 1;?>
<?php foreach ($datapelanggan as $dpe): ?>
    <?php ?>
    <tr>
      <th scope="row"><?=$i++;?></th>
      <td><?=$dpe['nama'];?></td>
      <td><?=$dpe['nomortelpon'];?></td>
      <td><?=$dpe['alamat'];?></td>
      <td><?=$dpe['kodepelanggan'];?></td>
    </tr>
    <?php endforeach;?>
      </tbody>
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

            <!-- Modal Tambah -->
<div class="modal fade" id="modeTambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">TAMBAH DATA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action = "/datapelanggan/save" method="post">
          <?= csrf_field(); ?>
    <div class="form-group">
    <label for="nama">Nama</label>
      <input type="text" class="form-control " id="nama" name="nama" autofocus>
    </div>
    <div class="form-group">
    <label for="nomor">Nomor Telpon</label>
      <input type="text" class="form-control" id="nomor" name="nomor">
     </div>
    <div class="form-group">
    <label for="alamat">Alamat</label>
      <input type="text" class="form-control" id="alamat" name="alamat">
     </div>
    <div class="form-group">
    <label for="kodepelanggan" >Kode Pelanggan</label>
      <input type="text" class="form-control" id="kodepelanggan" name="kodepelanggan">
     </div>  
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
      </div>
    </div>
    </form>
  </div>
</div>

            <?=$this->endSection();?>
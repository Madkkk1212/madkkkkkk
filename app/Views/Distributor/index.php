<?=$this->extend('templates/index');?>

<?=$this->section('page-content');?>

  <h1><div class="d-flex justify-content-center">Distributor</div></h1>
               
   <button class="btn btn-primary mb-3" type="button" data-toggle="modal" data-target="#modeTambah">+ TAMBAH DATA </button>
   
  <!-- <?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-primary" role="alert">
       <?= session()->getFlashdata('pesan'); ?>
    </div>
  <?php endif ; ?> -->


    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pemasok</th>
      <th scope="col">Nomor Telpon</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kode Pelanggan</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php $i = 1;?>
<?php foreach ($distributor as $d): ?>
    <?php ?>
    <tr>
      <th scope="row"><?=$i++;?></th>
      <td><?=$d['namapemasok'];?></td>
      <td><?=$d['nomor'];?></td>
      <td><?=$d['alamat'];?></td>
      <td><?=$d['kodepelanggan'];?></td>
      <td>
        <button class="btn btn-primary mb-3" type="button" data-toggle="modal"  data-target="#modehapus">+ TasdasdA </button>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modeEDIT">EDIT</button>
        </div>
      </td>
    </tr>
    <?php endforeach;?>
<!-- Button trigger modal -->


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">tambah Distributor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

      </tbody>
</table>
<div class=" text-right ">

    </div>

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
        <form action = "/distributor/save" method="post">
          <?= csrf_field(); ?>
    <div class="form-group">
    <label for="namapemasok">Nama Pemasok</label>
      <input type="text" class="form-control <?= ($validation->hasError('namapemasok')) ? 'is-invalid':null; ?>" id="namapemasok" name="namapemasok" autofocus>
      <div class="invalid-feedback">
        <?= $validation->getError('namapemasok'); ?>
      </div>
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
            <!-- Modal Tambah -->
<div class="modal fade" id="modedelete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">TAMBAH DATA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">

  </div>

<!-- Modal HAPUS -->
<div class="modal fade" id="modehapus" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">HAPUS DATA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
        <button type="button" class="btn btn-primary">SIMPAN</button>
      </div>
    </div>
  </div>
</div>

<?=$this->endSection();?>
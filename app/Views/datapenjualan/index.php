<?=$this->extend('templates/index');?>

<?=$this->section('page-content');?>


     <h1><div class="d-flex justify-content-center">Data Penjualan</div></h1>
    <table class="table">
    <button class="btn btn-primary mb-3" type="button" data-toggle="modal" data-target="#modeTambah">+ TAMBAH DATA </button>
  <!-- <?php if(session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-primary" role="alert">
       <?= session()->getFlashdata('pesan'); ?>
    </div>
  <?php endif ; ?> -->
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Pelanggan</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Total Harga</th>
      <th scope="col">Metode Pembayaran</th>
      <th scope="col">Keterangan</th>

    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>     
    <?php foreach ($datapenjualan as $dp => $value) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $value->kodepelanggan ?></td>
      <td><?= $value->kodebarang ?></td>
      <td><?= $value->namabarang ?></td>
      <td><?= $value->harga ?></td>
      <td><?= $value->jumlah ?></td>
      <td><?= $value->totalharga ?></td>
      <td><?= $value->metodepembayaran ?></td>
      <td><?= $value->keterangan ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<div class=" text-right ">
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
        <form action = "/datapenjualan/save" method="post">
          <?= csrf_field(); ?>
    <div class="form-group">
    <label for="kodepelanggan">Kode Pelanggan</label>
      <input type="text" class="form-control " id="kodepelanggan" name="kodepelanggan" autofocus>
      </div>
    <div class="form-group">
    <label for="kodebarang">kodebarang</label>
      <input type="text" class="form-control" id="kodebarang" name="kodebarang">
     </div>
    <div class="form-group">
    <label for="namabarang">Nama Barang</label>
      <input type="text" class="form-control" id="namabarang" name="namabarang">
     </div>
    <div class="form-group">
    <label for="harga" >harga</label>
      <input type="text" class="form-control" id="harga" name="harga">
     </div>  
    <div class="form-group">
    <label for="jumlah" >Jumlah</label>
      <input type="text" class="form-control" id="jumlah" name="jumlah">
     </div>  
    <div class="form-group">
    <label for="totalharga" >totalharga</label>
      <input type="text" class="form-control" id="totalharga" name="totalharga">
     </div>  
    <div class="form-group">
    <label for="metodepembayaran" >metodepembayaran</label>
      <input type="text" class="form-control" id="metodepembayaran" name="metodepembayaran">
     </div>  
    <div class="form-group">
    <label for="keterangan" >keterangan</label>
      <input type="text" class="form-control" id="keterangan" name="keterangan">
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
</div>

<?=$this->endSection();?>
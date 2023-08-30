<?=$this->extend('templates/index');?>

<?=$this->section('page-content');?>

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
    <?php foreach ($datakeluar as $dk => $value): ?>
    <tr>
      <th scope="row"><?=$i++;?></th>
      <td><?=$value->namapelanggan?></td>
      <td><?=$value->tanggal?></td>
      <td><?=$value->kodebarang?></td>
      <td><?=$value->stokawal?></td>
      <td><?=$value->stokkeluar?></td>
      <td><?=$value->stokawal - $value->stokkeluar + $value->jumlahstok?></td>
      <td><?=$value->keterangan?></td>
      <td><div class="d-grid gap-2 d-md-block">
         <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modeTambah">TAMBAH</button>
         <a href="/datakeluar/hapus/<?= $datakeluar['id']; ?>" class="btn btn-primary">HAPUS</a>
        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modeEDIT">EDIT</button>
      </div>

    <?php endforeach;?>
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
      <form action = "/datakeluar/save" method="post">
        <?= csrf_field(); ?>
    <div class="form-group">
    <label for="namapelanggan">Nama Pelanggan</label>
    <input type="email" class="form-control" id="namapelanggan" name="namapelanggan" >
    </div>
    <div class="form-group">
    <label for="tanggal">tanggal</label>
    <input type="date" class="form-control" id="tanggal" name="tanggal">
     </div>
    <div class="form-group">
    <label for="kodebarang">kodebarang</label>
    <input type="text" class="form-control" id="kodebarang" name="kodebarang">
     </div>
    <div class="form-group">
    <label for="stokawal" >Stokawal</label>
    <input type="text" class="form-control" id="stokawal" name="stokawal">
     </div>
    <div class="form-group">
    <label for="stokkeluar">Stok Keluar</label>
    <input type="text" class="form-control" id="stokkeluar" name="stokkeluar">
     </div>
     <div>
    <label for="jumlahstok">jumlahstok</label>
    <input type="text" class="form-control" id="jumlahstok" name="jumlahstok">
     </div>
    <div>
    <label for="jumlahstok">keterangan</label>
    <input type="text" class="form-control" id="jumlahstok" name="keterangan">
     </div>
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
        <button type="button" class="btn btn-primary">SIMPAN</button>
      </div>
    </div>
  </div>
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
      yakin mengapus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal EDIT -->
<div class="modal fade" id="modeEDIT" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">HAPUS EDIT</h5>
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

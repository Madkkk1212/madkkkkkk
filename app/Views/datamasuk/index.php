<?=$this->extend('templates/index');?>

<?=$this->section('page-content');?>

                <h1><B><font color = 'green'><div class="d-flex justify-content-center">DATA MASUK</div></font></B></h1>
                <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pemasok</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Stok Awal</th>
      <th scope="col">Stok Masuk</th>
      <th scope="col">Jumlah Masuk</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody> 
    <?php $i = 1; ?>    
    <?php foreach ($datamasuk as $dm => $value) : ?>
    <tr>
      <th scope="row"><?=$i++;?></th>
      <td><?= $value->namapemasok ?></td>
      <td><?= $value->tanggal ?></td>
      <td><?= $value->kodebarang ?></td>
      <td><?= $value->namabarang ?></td>
      <td><?= $value->stokawal ?></td>
      <td><?= $value->stokmasuk ?></td>
      <td><?= $value->jumlahmasuk ?></td>
      <td><?= $value->keterangan ?></td>
    </tr>
    
    <?php endforeach; ?>
  </tbody>
</table>
<div class=" text-right ">

            </div>
    
            <?=$this->endSection();?>
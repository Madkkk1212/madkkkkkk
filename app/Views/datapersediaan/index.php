<?=$this->extend('templates/index');?>

<?=$this->section('page-content');?>
 <h1><div class="d-flex justify-content-center">DATA PERSEDIAAN</div></h1>
    <table class="table">
  <thead>
    
    <tr>
        <th scope="col">No</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
        <th scope="col">Stok Awal</th>
      <th scope="col">Stok Barang Masuk</th>
      <th scope="col">Stok Barang keluar</th>
      <th scope="col">Stok Akhir</th>
      <th scope="col">Keterangan</th>
    </tr>
    
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
      </tbody>
</table>
<div class=" text-right ">

            </div>
            
            <?=$this->endSection();?>
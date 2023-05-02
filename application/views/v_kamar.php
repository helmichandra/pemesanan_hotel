<section class="wrapper">
<div class="block-header">
<h1 style="text-align: center">Kamar</h1>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="#">
                        <div class="#">
                            <div class="row clearfix">
                                <div class="col-xs-8 col-sm-3">
                                    
                                </div>
                                
                            </div>
                            <div class="body">
                              <div class="row">
                              
                                 <a href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
                                <table class="table table-hover table-striped" style="margin-top: 40px;">
                                <tr>
                                  <th>NO</th><th>ID KAMAR</th><th>NAMA KAMAR</th><th>ID KATEGORI</th><th>GAMBAR</th><th>HARGA/malam Rp.</th><th>STOK</th><th>AKSI</th>

                                </tr>
                                    <?php
                                    $no=0;
                                    foreach ($data_kamar as $dt_kam) {
                                      $no++;
                                      echo'<tr>
                                        <td>'.$no.'</td>
                                        <td>'.$dt_kam->id_kamar.'</td>
                                        <td>'.$dt_kam->nama_kamar.'</td>
                                        <td>'.$dt_kam->id_kategori.'</td>
                                        <td><img src='.base_url("assets/img/$dt_kam->gambar").' width="150px" height="100px"></img></td>
                                        <td>'.$dt_kam->harga.'</td>
                                        <td>'.$dt_kam->stok.'</td>
                                        <td><a href="#update_kamar" class="btn btn-warning"I data-toggle="modal" onclick="tm_detail('.$dt_kam->id_kamar.')">Update</a> <a href="'.base_url('index.php/kamar/deleteKamar/'.$dt_kam->id_kamar).'" class="btn btn-danger"I data-toggle="modal" onclick="return confirm(\'anda yakin\')">Delate</a></td>
                                        </tr>';  
                                    }
                                ?>
                                </table>
                                <?php if ($this->session->flashdata('pesan')!=null): ?>
                                 <div class="alert alert-danger"><?= $this->session->flashdata('pesan');?></div>    
                                <?php endif ?>
                                
                        
                    </div>
                        
                              
                </div>
            </div>
        </div>
        <div class="modal fade"id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Tambah Kamar</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/kamar/simpan_kamar')?>" method="post" enctype="multipart/form-data">
        Nama Kamar
        <input type="text" name="nama_kamar" class="form-control"><br>
        <label>ID Kategori</label>
        <select name="id_kategori">
      <?php foreach($data_kategori as $kat):
         echo "<option value= '".$kat->id_kategori."'>".$kat->nama_kategori."</option>";
         endforeach ?>
      </select><br>
        <label>Upload Gambar</label>
      <input type="file" name="gambar" class="form-control">
      Harga
        <input type="text" name="harga" class="form-control"><br>
         Stok
        <input type="text" name="stok" class="form-control"><br>
        <input type="submit" name="simpan" value="simpan" class="btn btn-success">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade"id="update_kamar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Update Kamar</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('index.php/kamar/update_kamar')?>" method="post">
        <input type="hidden" name="id_kamar" id="id_kamar">
        Nama Kamar
        <input type="text" id="nama_kamar" name="nama_kamar" class="form-control"><br>
        <label>ID Kategori</label>
        <select id="id_kategori" name="id_kategori" class="form-control">
      <?php foreach($data_kategori as $kat):
         echo "<option value= '".$kat->id_kategori."'>".$kat->id_kategori."</option>";
         endforeach ?>
      </select><br>
        Gambar
        <label>Upload Gambar</label>
      <input type="file" name="gambar" class="form-control">
        <br>
        Harga
        <input type="text"id="harga" name="harga" class="form-control"><br>
        Stok
        <input type="text" name="stok" id="stok"class="form-control"><br>
        <input type="submit" name="simpan" value="simpan" class="btn btn-success">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
              
        </select>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
  function tm_detail(id_kamar){
    $.getJSON("<?=base_url()?>index.php/kamar/detail_kamar/"+id_kamar,function(data){
      $("#id_kamar").val(data['id_kamar']);
      $("#nama_kamar").val(data['nama_kamar']);
      $("#id_kategori").val(data['id_kategori']);
       $("#gambar").val(data['gambar']);
       $("#harga").val(data['harga']);
        $("#stok").val(data['stok']);

    });
  }
</script>
</section>

<div class="content">
                                <header class="align-center">
                                    <h2>PELANGGAN</h2>
                                    <p>Daftar</p>

                                    <div class="row">
                                        <ul class="header-dropdown m-r--5">
                               <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                <span class="glyphicon glyphicon-plus"></span>
                                Tambah
                               </button>
                            </ul>
                           <div class="col-md-12 col-xs-12 col-sm-12">
                           
                                <table class="table table-hover table-striped">
                                <tr><th>NO</th><th>ID</th><th>NAMA PEMBELI</th><th>ALAMAT</th><th>Telepon</th><th>USERNAME</th><th>PASSWORD</th><th>GAMBAR</th><th>AKSI</th></tr>

                                <?php 
                                $no = 0;
                                foreach ($data_pelanggan as $dt_pelg) {
                                $no++;    
                                echo '
                                    <tr>
                                    <td>'.$no.'</td>
                                    <td>'.$dt_pelg->id_pelanggan.'</td>
                                    <td>'.$dt_pelg->nama_pelanggan.'</td>
                                    <td>'.$dt_pelg->alamat.'</td>
                                    <td>'.$dt_pelg->no_telp.'</td>
                                    <td>'.$dt_pelg->username.'</td>
                                    <td>'.$dt_pelg->password.'</td>
                                    <td><img src='.base_url('assets/gambar/'.$dt_pelg->gambar).' width="120" height="100"></td>
                                    <td><a href="#update_pelanggan" class="btn btn-warning"
                                    data-toggle="modal" onclick="
                                    tm_detail('.$dt_pelg->id_pelanggan.')">Update</a>
                                    <a href='.base_url('index.php/pelanggan/hapus_pelanggan/'.$dt_pelg->id_pelanggan).' class="btn btn-success" onclick="return confirm(\'anda yakin lur?\')">Delete</a></td>
                                    </tr>';
                                }
                                ?>
                               
                                </table>
                                <?php if ($this->session->flashdata('pesan')!=null): ?>
                                <div class="alert alert-danger">
                                <?= $this->session->flashdata('pesan');?>
                                </div>
                                 <?php endif ?> 
                                <!-- <?php if($this->session->flashdata('pesan')!=null)
                                {
                                echo '
                                <div class="alert alert-danger">'
                                .$this->session->flashdata('pesan').'
                                </div> ';
                                }
                                ?>      -->
                           </div>
                        </div>
                        
                                </header>
                                <hr />
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Two -->
            <section id="two" class="wrapper style3">
                <div class="inner">
                    <div id="flexgrid">
                        <div>
                            <header>
                                <h3>Tempus Feugiat</h3>
                            </header>
                            <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu</p>
                            <ul class="actions">
                                <li><a href="#" class="button alt">Learn More</a></li>
                            </ul>
                        </div>
                        <div>
                            <header>
                                <h3>Aliquam Nulla</h3>
                            </header>
                            <p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed </p>
                            <ul class="actions">
                                <li><a href="#" class="button alt">Learn More</a></li>
                            </ul>
                        </div>
                        <div>
                            <header>
                                <h3>Sed Magna</h3>
                            </header>
                            <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.</p>
                            <ul class="actions">
                                <li><a href="#" class="button alt">Learn More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Three -->
            <section id="three" class="wrapper style2">
                <div class="inner">
                    <div class="grid-style">

                        <div>
                            <div class="box">
                                <div class="image fit">
                                    <img src="<?=base_url()?>images/pic02.jpg" alt="" />
                                </div>
                                <div class="content">
                                    <header class="align-center">
                                        <h2>Lorem ipsum dolor</h2>
                                        <p>maecenas feugiat ex purus, quis volutpat lacus placerat</p>
                                    </header>
                                    <hr />
                                    <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="box">
                                <div class="image fit">
                                    <img src="<?=base_url()?>images/pic03.jpg" alt="" />
                                </div>
                                <div class="content">
                                    <header class="align-center">
                                        <h2>Vestibulum sit amet</h2>
                                        <p>mattis sapien pretium tellus venenatis</p>
                                    </header>
                                    <hr />
                                    <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        <!-- Four -->
            <section id="four" class="wrapper style3">
                <div class="inner">

                    <header class="align-center">
                        <h2>Morbi interdum mollis sapien</h2>
                        <p>Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
                    </header>

                </div>
            </section> 
<footer id="footer" class="wrapper">
                <div class="inner">
                    <section>
                        <div class="box">
                            <div class="content">
                                <h2 class="align-center"><b>Order</b> Here</h2>
                                <hr />
                                <form action="#" method="post">
                                    <div class="field half first">
                                        <label for="name">Name</label>
                                        <input name="name" id="name" type="text" placeholder="Name">
                                    </div>
                                    <div class="field half">
                                        <label for="email">Phone No.</label>
                                        <input name="email" id="email" type="email" placeholder="No.">
                                    </div>
                                    <div class="field">
                                        <label for="dept">Type</label>
                                        <div class="select-wrapper">
                                            <select name="dept" id="dept">
                                                <option value="">- Category -</option>
                                                <option value="1">Singgle</option>
                                                <option value="1">Double</option>
                                                <option value="1">Triple</option>
                                                <option value="1">King</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                                    </div>
                                    <ul class="actions align-center">
                                        <li><input value="Send Message" class="button special" type="submit"></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </section>
                    <div class="copyright">
                        &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>. Video <a href="http://coverr.co/">Coverr</a>.
                    </div>
                </div>
            </footer>   
            <div class="modal fade" id="update_pelanggan">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Tambah Pelanggan</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url('index.php/pelanggan/update_pelanggan')?>" method="post">
                                <input type="hidden" name="id_pelanggan" id="id_pelanggan">
                                <label for="">Nama pelanggan</label>
                                <input id="nama_pelanggan" id="nama_pelanggan" type="text" name="nama_pelanggan" class="form-control"><br>
                                
                                <label for="">Alamat</label>
                                <input id="alamat" id="alamat" type="text" name="alamat" class="form-control"><br>                                
                               
                                
                                <label for="">Telepon</label>
                                <input id="no_telp" id="no_telp" type="text" name="no_telp" class="form-control"><br>    
                                
                            
                                <label for="">Username</label>
                                <input id="username" name="username" id="" class="form-control" >
                                    <label for="">Password</label>
                                <input id="password" id="password" name="password" id="" class="form-control" >
                                
                                <!-- <option value="1">Laptop</option>
                                <option value="2">Accessories</option>
                                <option value="3">SmartPhone</option>
                                <option value="4">Software</option>
                                <option value="5">Makanan</option> -->
                             
                                

                                <br>
                                Upload Gambar
                                <input type="file" name="gambar" class="form-control">
                                <input type="submit" name="simpan" value="simpan" class="btn btn-success">
                                </div>
                                
                                </form>
                                
                            </div>
                            
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Tambah Pelanggan</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url('index.php/pelanggan/simpan_pelanggan')?>" method="post"
                                enctype="multipart/form-data">

                                <label for="">Nama Pembeli</label>
                                <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control"><br>
                                
                                <label for="">Alamat</label>
                                <input type="text" id="alamat" name="alamat" class="form-control"><br>                                
                               
                                
                                <label for="">Telepon</label>
                                <input type="text" id="no_telp" name="no_telp" class="form-control"><br>    
                                
                            
                                <label for="">Username</label>
                                <input type="text" id="username" name="username" class="form-control" ><br>
                                <label for="">Password</label>
                                <input type="text" id="password" name="password" class="form-control" >
                                
                                
                             
                                

                                <br>
                                Upload Gambar
                                <input type="file" name="gambar" id="gambar" class="form-control">
                                <input type="submit" name="simpan" value="simpan" class="btn btn-success">
                                </div>
                                </form>
                                
                            </div>
                            
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

<script> function tm_detail(id_pelanggan){
$.getJSON("<?=base_url()?>index.php/pelanggan/get_detail_pelanggan/"+id_pelanggan,function(data){
    $("#id_pelanggan").val(data['id_pelanggan']);
    $("#nama_pelanggan").val(data['nama_pelanggan']);
    $("#alamat").val(data['alamat']);
    $("#no_telp").val(data['no_telp']);
    $("#username").val(data['username']);
    $("#password").val(data['password']);
});}
</script>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="<?=base_url()?>style/image/png" href="<?=base_url()?>style/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>style/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?=base_url()?>style/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login

				</span>
				<?php if ($this->session->flashdata('pesan')!=null): ?>
                                <div class="alert alert-danger">
                                <?= $this->session->flashdata('pesan');?>
                            <?php endif?>
				<form class="login100-form validate-form p-b-33 p-t-5" action="<?=base_url()?>index.php/login_user/proses_login" id="sign_in" method="POST" action="#">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="form-control" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="form-control" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn m-t-32">
						<a class="login100-form-btn" data-toggle="modal" data-target="#daftar">
							Daftar
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Pendaftaran Pelanggan</h4>
      </div>
      <div class="modal-body">
        <form id="proses_daftar" method="POST" action="#">
        <table>
            <tr>
                Nama<input type="text" name="nama" class="form-control">
            </tr>
            <tr>
               Alamat<textarea name="alamat" class="form-control"></textarea>
            </tr>
            <tr>
               Telp<input name="no_telp" class="form-control">
            </tr>
            <tr>
               Username<input name="username" class="form-control">
            </tr>
            <tr>
               Password<input name="password" class="form-control" type="password"><br>
            </tr>
        </table>
        <input type="submit" name="daftar" value="DAFTAR" class="btn btn-block bg-pink waves-effect">
        <p id="msg"></p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=base_url()?>style/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>style/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>style/vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url()?>style/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>style/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>style/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url()?>style/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>style/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url()?>style/js/main.js"></script>

</body>
</html>
<script type="text/javascript">
    $("#proses_daftar").submit(function(event) {
        event.preventDefault();
        var data_input  = $('#proses_daftar').serialize();
        $("#msg").html("<ul><li>Sedang memeriksa.....</li></ul>");
        $.ajax({
            url:"<?=base_url()?>index.php/Login_user/simpan",type:"post",data:data_input,dataType:"json", 
            success:function(hasil){
                if (hasil['status']==true) {
                    $("#msg").html(hasil['keterangan']);
                    $("[name=nama]"),val('');
                    $("[name=alamat]"),val('');
                    $("[name=telp]"),val('');
                    $("[name=username]"),val('');
                    $("[name=password]"),val('');
                    setTimeout(function() {
                        $("#daftar"),modal('hide');
                    }, 3000);
                    
                }
                else{
                    $("#msg").html(hasil['keterangan']);
                }
            }
        });
    });
    $("#sign_in").submit(function(event) {
        event.preventDefault();
        var datalogin=$("#sign_in").serialize();
        $("#pesan").html("Loading.....");
        $.ajax({
            url:"<?=base_url()?>index.php/login_user/proses",
            type:"post",
            data:datalogin,
            dataType:"json",
            success:function(hasil) {
            if (hasil['status']==true) {
                $("#pesan").html("Sukses Login LURRRR");
                setTimeout(function() {
                  location.href="<?=base_url()?>index.php/dashboard_user";  
                }, 3000);
                
            }   else{
                $("#pesan").html("Ga COCOK LURRRR1!1!1!1!1!1!1!");
            } 
            }
        });
    });
</script>
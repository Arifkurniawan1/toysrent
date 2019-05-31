<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Barang</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('/img/kids.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo site_url("admin/edit_barang")?>" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-view-toc"></i>
					</span>

					<span class="login100-form-title p-b-100 p-t-80">
						Update Barang
					</span>

					<div class="wrap-input100 validate-input" data-validate = "ID Barang (Can not be changed)">
						<input class="input100" type="text" name="id_barang" value="<?php echo $data['id_barang']; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Enter Nama Item">
						<input class="input100" type="text" name="nama" value="<?php echo $data['nama_item']; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Warna">
						<input class="input100" type="text" name="warna" value="<?php echo $data['warna']; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Url Foto">
						<input class="input100" type="text" name="url_foto" value="<?php echo $data['url_foto']; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                        <div class="wrap-input100 validate-input" data-validate = "Enter Kondisi">
						<input class="input100" type="text" name="kondisi" value="<?php echo $data['kondisi']; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>


                        <div class="wrap-input100 validate-input" data-validate = "Enter Lama Penggunaan">
						<input class="input100" type="text" name="lama_penggunaan" value="<?php echo $data['lama_penggunaan']; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>


                        <div class="wrap-input100 validate-input" data-validate = "Pemilik/Penyewa (Can not be changed)">
						<input class="input100" type="text" name="pemilik" value="<?php echo $data['nama_lengkap']; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>



					<div class="Enter Bronze">
					 <span class="login100-form-title p-b-10 p-t-40">
						Bronze
					</span>
						<input class="input100" type="text" name="bronze_royalty" value="<?php echo $bronze['porsi_royalti']; ?>">
						<input class="input100" type="text" name="bronze_sewa" value="<?php echo $bronze['harga_sewa']; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="Enter Silver">
					 <span class="login100-form-title p-b-10 p-t-40">
						Silver
					</span>
						<input class="input100" type="text" name="silver_royalty" value="<?php echo $silver['porsi_royalti']; ?>">
						<input class="input100" type="text" name="silver_sewa" value="<?php echo $silver['harga_sewa']; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="Enter Gold">
					 <span class="login100-form-title p-b-10 p-t-40">
						Gold
					</span>
						<input class="input100" type="text" name="gold_royalty" value="<?php echo $gold['porsi_royalti']; ?>">
						<input class="input100" type="text" name="gold_sewa" value="<?php echo $gold['harga_sewa']; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<!--<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>-->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/js/login.js"></script>

</body>
</html>

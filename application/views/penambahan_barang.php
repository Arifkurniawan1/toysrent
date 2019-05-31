<!DOCTYPE html>
<html lang="en">
<head>
	<title>Penambahan Barang</title>
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
				<form class="login100-form validate-form" action="<?php echo site_url('admin/input_barang')?>" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-card-giftcard"></i>
					</span>


					<span class="login100-form-title p-b-100 p-t-80">
						Penambahan Barang
					</span>
					<h3><?php echo $this->session->flashdata('msg');?><h3>

					<div class="wrap-input100 validate-input" data-validate = "Enter Id Barang">
						<input class="input100" type="text" name="id_barang" placeholder="Id Barang">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Nama Item">
						<input class="input100" type="text" name="nama_item" placeholder="Nama Id Item">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Warna">
						<input class="input100" type="text" name="warna" placeholder="Warna">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Url Foto">
						<input class="input100" typed="text" name="url_foto" placeholder="Url Foto">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                        <div class="wrap-input100 validate-input" data-validate = "Enter Kondisi">
						<input class="input100" type="text" name="kondisi" placeholder="Kondisi">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>


                        <div class="wrap-input100 validate-input" data-validate = "Enter Lama Penggunaan">
						<input class="input100" type="text" name="lama_penggunaan" placeholder="Lama Penggunaan">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>



						<div class="wrap-input100 validate-input" data-validate ="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Pemilik</label>
                        <div class="col-11">
                        <select class="custom-select col-10" name="inlineFormCustomSelect">
												<option selected="">Option</option>
													<?php
													foreach($anggota->result_array() as $i){
													?>
														<option value="<?php echo $i['no_ktp']; ?>"> <?php echo $i['nama_lengkap']; ?> </option>
													<?php }?>
                        </select>
                        </div>
                    </div>



					 <div class="Enter Bronze">
					 <span class="login100-form-title p-b-10 p-t-40">
						Bronze
					</span>
						<input class="input100" type="text" name="bronze_royalty" placeholder="Persen Royalty">
						<input class="input100" type="text" name="bronze_sewa" placeholder="Harga Sewa">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="Enter Silver">
					 <span class="login100-form-title p-b-10 p-t-40">
						Silver
					</span>
						<input class="input100" type="text" name="silver_royalty" placeholder="Persen Royalty">
						<input class="input100" type="text" name="silver_sewa" placeholder="Harga Sewa">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="Enter Gold">
					 <span class="login100-form-title p-b-10 p-t-40">
						Gold
					</span>
						<input class="input100" type="text" name="gold_royalty" placeholder="Persen Royalty">
						<input class="input100" type="text" name="gold_sewa" placeholder="Harga Sewa">
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

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Penambahan Item</title>
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
				<form class="login100-form validate-form" action="<?php echo site_url('admin/input_item')?>" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-face"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Penambahan Item
					</span>
					<h3><?php echo $this->session->flashdata('msg');?><h3>
					<div class="wrap-input100 validate-input" data-validate = "Enter Nama">
						<input class="input100" type="text" name="nama" placeholder="Nama">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Deskripsi">
						<input class="input100" type="text" name="deskripsi" placeholder="Deskripsi">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Rentang Usia">
						<input class="input100" type="text" name="usia_dari" placeholder="Rentang Usia">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Rentang Usia">
						<input class="input100" type="text" name="usia_sampai" placeholder="Rentang Usia">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Bahan">
						<input class="input100" type="text" name="bahan" placeholder="Bahan">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>


                 <!--   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Kategori
                                <span class="caret"></span></button>-->
                                 <select class="custom-select col-10" name="kategori" id="inlineFormCustomSelect">
                                                <option selected="" >Pilih Kategori</option>
                                                <option value="Motorik Kasar"> Motorik Kasar </option>
                                                <option value="Motorik Halus"> Motorik Halus</option>
												<option value="Aksesoris Bayi"> Aksesoris Bayi </option>
                                                <option value="Baby Walker"> Baby Walker</option>
                                                <option value="Lego"> Lego </option>
                                            </select>
                   <!-- <div class="form-group row">
                                        <label for="example-month-input" class="col-2 col-form-label">Kategori</label>
                                        <div class="col-10">
                                            <select class="custom-select col-10" id="inlineFormCustomSelect">
                                                <option selected="">Pilih Barang</option>
                                                <option value="1"> Makota merk X warna Merah </option>
                                                <option value="1"> Makota merk X warna Biru</option>
												<option value="1"> Makota merk Y warna Merah </option>
                                                <option value="1"> Makota merk Y warna Biru</option>
												<option value="1"> Makota merk Z warna Merah </option>
                                                <option value="1"> Makota merk Z warna Biru</option>
												<option value="1"> Ayunan </option>
                                                <option value="1"> Gendongan</option>
												<option value="1"> Stroler </option>
                                                <option value="1"> Puzzle</option>
                                            </select>
                                        </div>
                                    </div>-->

					<!--<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>-->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" >
							Submit
						</button>
					</div>

					<!--<div class="text-center p-t-90">
						<a class="txt1" href="index.html">
							Forgot Password?
						</a>
					</div>-->
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

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title ?? ""; ?> | Login</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

	<style>
		body {
			height: 100vh;
			background: #0E0B36;
			display: flex;
			align-items: center;
			justify-content: center;
			font-family: 'Nunito', sans-serif;
		}

		.card {
			background-color: rgb(27, 22, 49);
			border: none;
			border-radius: 15px;
			box-shadow: 0 10px 30px rgba(49, 30, 101, 0.2);
		}

		.card img {
			border-top-left-radius: 15px;
			border-bottom-left-radius: 15px;
			display: block;
			margin: 0 auto;
		}

		.btn-primary {
			background-color: #5A50FF;
			border: none;
			transition: background-color 0.3s;
		}

		.btn-primary:hover {
			background-color: #17a673;
		}

		.text-gray-900 {
			color: #fff !important;
		}

		h1 {
			font-weight: 700;
			color: #fff;
		}

		.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
			background-color: #1cc88a;
		}

		.form-control-user {
			border-radius: 20px;
			padding: 15px 20px;
			font-size: 0.9rem;
		}

		.container {
			max-width: 900px;
		}
	</style>

</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="card o-hidden border-0 shadow-lg">
					<div class="row">
						<div class="col-lg-6 d-none d-lg-block d-flex justify-content-center align-items-center">
							<img src="<?= base_url('assets/img/amikom.png'); ?>" class="img-fluid" alt="Logo Amikom">
						</div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
									<?= $this->session->flashdata('message'); ?>
								</div>
								<form class="user" method="POST" action="">
									<div class="form-group">
										<input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." autocomplete="off" name="email" value="<?= set_value('email'); ?>">
										<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password" autocomplete="off">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox small">
											<input type="checkbox" class="custom-control-input" id="customCheck">
											<label class="custom-control-label" for="customCheck" style="color: #fff;">Remember Me</label>
										</div>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="<?= base_url('register'); ?>" style="color: #5A50FF;">Create an Account!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
</body>

</html>

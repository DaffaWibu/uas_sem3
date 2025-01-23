<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title ?? ""; ?> | Register</title>

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
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-6 d-flex justify-content-center align-items-center">
						<img src="<?= base_url('assets/img/amikom.png'); ?>" class="img-fluid" alt="Logo Amikom">
					</div>
					<div class="col-lg-6">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
							</div>
							<form class="user" method="POST" action="">
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="name" placeholder="Full Name" name="name" value="<?= set_value('name'); ?>">
									<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= set_value('email'); ?>">
									<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="col-sm-6">
										<input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="password2">
									</div>
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block">
									Register Account
								</button>
							</form>
							<hr>
							<div class="text-center">
								<a class="small" href="<?= base_url('login'); ?>" style="color: #5A50FF;">Already have an account? Login!</a>
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

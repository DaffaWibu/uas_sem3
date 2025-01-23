<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Lecturer</h1>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header d-flex flex-row align-items-center justify-content-between py-3">
			<h6 class="m-0 font-weight-bold text-primary">Tambah Data Dosen</h6>
		</div>
		<div class="card-body">
			<form action="<?= base_url('lecturer/store') ?>" method="post">
				<div class="form-group">
					<label for="name">Nama <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" required>
				</div>
				<div class="form-group">
					<label for="email">Email <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
				</div>
				<div class="form-group">
					<label for="password">Password <span class="text-danger">*</span></label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
				</div>
				<div class="form-group">
					<label for="nidn">NIDN <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="nidn" name="nidn" placeholder="Masukkan NIDN" required>
				</div>
				<div class="form-group">
					<label for="course">Mata Kuliah <span class="text-danger">*</span></label>
					<input type="text" class="form-control" id="course" name="course" placeholder="Masukkan Mata Kuliah" required>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>
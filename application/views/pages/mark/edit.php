<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Edit Nilai</h1>
	</div>

	<div class="card shadow mb-4">
		<div class="card-header d-flex flex-row align-items-center justify-content-between py-3">
			<h6 class="m-0 font-weight-bold text-primary">Edit Data Nilai</h6>
		</div>
		<div class="card-body">
			<form action="<?= base_url('mark/update') ?>" method="post">
				<input type="hidden" name="id" value="<?= $mark->id ?>">
				<div class="form-group">
					<label for="lecturer_id">Dosen <span class="text-danger">*</span></label>
					<select class="form-control" id="lecturer_id" name="lecturer_id" required>
						<option value="">-- Pilih Dosen --</option>
						<?php foreach ($lecturers as $lecturer) : ?>
							<option value="<?= $lecturer->id ?>" <?= $mark->lecturer_id == $lecturer->id ? 'selected' : '' ?>>
								<?= $lecturer->name ?>
							</option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="student_id">Mahasiswa <span class="text-danger">*</span></label>
					<select class="form-control" id="student_id" name="student_id" required>
						<option value="">-- Pilih Mahasiswa --</option>
						<?php foreach ($students as $student) : ?>
							<option value="<?= $student->id ?>" <?= $mark->student_id == $student->id ? 'selected' : '' ?>>
								<?= $student->name ?>
							</option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="mark">Nilai <span class="text-danger">*</span></label>
					<input type="number" class="form-control" id="mark" name="mark" placeholder="Masukkan Nilai" value="<?= $mark->mark ?>" required>
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>
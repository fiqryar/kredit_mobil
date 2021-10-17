<x-app-dashboard>
	<x-slot name="header">
		<h2 class="t-bold t-color-secondary">Update Mobil</h2>
	</x-slot>

	<form action="" method="">
		<div class="card p-0 shadow-md border-0">
			<div class="card-header bg-white p-3 sticky-top gap-top z-index-2 clearfix">
				<h6 class="t-color-secondary t-semibold m-0 float-start">Mobil</h6>
				<button type="button" class="btn btn-sm bg-color-secondary text-white hover-shadow hover-translateY-1px transition float-end rounded-0 rounded-end">Update Mobil</button>
				<a href="/dashboard/cars" class="btn btn-sm bg-color-lightgray text-white hover-shadow hover-translateY-1px transition float-end rounded-0 rounded-start">Batal</a>
			</div>
			<div class="card-body">
				<div class="ps-lg-3">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group mb-3">
								<label for="merk" class="form-label">Merk Mobil</label>
								<input type="text" class="form-control" id="merk" name="merk" placeholder="e.g Tesla" value="{{ $mobil->merk }}">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group mb-3">
								<label for="type" class="form-label">Tipe Mobil</label>
								<input type="text" class="form-control" id="type" name="type" placeholder="e.g Sport" value="{{ $mobil->type }}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group mb-3">
								<label for="harga_mobil" class="form-label">Harga Mobil</label>
								<input type="text" class="form-control" id="harga_mobil" name="harga_mobil" placeholder="e.g 2.000.000.000" value="{{ $mobil->harga_mobil }}">
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group mb-3">
								<label for="gambar" class="form-label">Gambar Mobil</label>
								<input type="file" class="form-control" id="gambar" name="gambar">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group mb-3">
								<label for="warna" class="form-label">Warna Mobil</label>
								<input type="color" class="form-control form-control-color" id="warna" name="warna" value="{{ $mobil->warna }}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<img src="/images/tesla-black-car.png" alt="Tesla Black" class="img-fluid rounded-3">
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</x-app-dashboard>
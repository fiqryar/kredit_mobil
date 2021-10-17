<x-app-dashboard>
	<x-slot name="header">
		<h2 class="t-bold t-color-secondary">Transaksi</h2>
	</x-slot>
	<div class="card p-0 shadow-md border-0 mb-3">
		<div class="card-header border-0 bg-white p-3 d-flex justify-content-between">
			<h6 class="t-color-secondary t-semibold m-0">Pelanggan</h6>
		</div>
		<div class="card-body">
			<div class="d-flex align-items-center justify-content-between mb-3">
				<div class="d-flex">
					<div class="form-check me-2  ">
						<input class="form-check-input" id="pelangganlama" type="radio" name="flexRadioDefault">
						<label class="form-check-label" for="flexRadioDefault2">
							Pelanggan Lama
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" id="pelangganbaru" type="radio" name="flexRadioDefault">
						<label class="form-check-label" for="flexRadioDefault1">
							Pelanggan Baru
						</label>
					</div>
				</div>			
			</div>
			@include('transaction._formpelangganbaru')
			@include('transaction._formpelangganlama')
		</div>
	</div>
	

	<div class="card p-0 shadow-md border-0 mb-3">
		<div class="card-header border-0 bg-white p-3 d-flex justify-content-between">
			<h6 class="t-color-secondary t-semibold m-0">Mobil</h6>
			<!-- Button trigger modal -->
			<button type="button" class="btn bg-color-secondary text-white hover-btn-color-secondary transition" data-bs-toggle="modal" data-bs-target="#modalMobil">
			Pilih Mobil
			</button>
		</div>
		<div class="card-body">
			@include('transaction._modalmobil')
		</div>
	</div>

	<div class="card p-0 shadow-md border-0 ">
		<div class="card-header border-0 bg-white p-3 d-flex justify-content-between">
			<h6 class="t-color-secondary t-semibold m-0">Transaksi</h6>
		</div>
		<div class="card-body">
			<div class="d-flex align-items-center justify-content-between mb-3">
				<div class="d-flex">
					<div class="form-check me-2">
						<input class="form-check-input" id="radioCash" type="radio" name="flexRadioDefault">
						<label class="form-check-label" for="flexRadioDefault2">
							Cash
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" id="radioKredit" type="radio" name="flexRadioDefault">
						<label class="form-check-label" for="flexRadioDefault1">
							Kredit
						</label>
					</div>
				</div>			
			</div>
			@include('transaction/_formcash')
			
			@include('transaction/_formkredit')
		</div>
	</div>
	 	
	<x-slot name="script">
		<script type="text/javascript">
			$(document).ready(function() {
				$('#pelangganbaru').on('click', function() {
					let pelangganBaru = document.getElementById("pelangganBaru");
					let pelangganLama = document.getElementById("pelangganLama");
					let btnDataPelanggan = document.getElementById("btnDataPelanggan");
					pelangganBaru.classList.remove("d-none");
					pelangganLama.classList.add("d-none");
					btnDataPelanggan.classList.add("d-none");

				});

				$('#pelangganlama').on('click', function() {
					let pelangganBaru = document.getElementById("pelangganBaru");
					let pelangganLama = document.getElementById("pelangganLama");
					let btnDataPelanggan = document.getElementById("btnDataPelanggan");
					pelangganBaru.classList.add("d-none");
					pelangganLama.classList.remove("d-none");
					btnDataPelanggan.classList.remove("d-none");
					console.info('select2');
				});

				$('#radioCash').on('click', function() {
					let formcash = document.getElementById("formcash");
					let formkredit = document.getElementById("formkredit");
					formcash.classList.remove("d-none");
					formkredit.classList.add("d-none");

				});

				$('#radioKredit').on('click', function() {
					let formcash = document.getElementById("formcash");
					let formkredit = document.getElementById("formkredit");
					formcash.classList.add("d-none");
					formkredit.classList.remove("d-none");
				});
			})
		</script>
		<script>
			$('.js-example-basic-single').select2();
  		 	$(document).ready( function () {
  		    $('#myTable2').DataTable();
			} );
		</script>
	</x-slot>
</x-app-dashboard>
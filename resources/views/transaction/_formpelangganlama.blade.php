<form action="" method="POST" id="pelangganLama" class="d-none">
   <div class="row mb-3">
      <div class="col-6">
         <button type="button" class="btn bg-color-secondary text-white hover-btn-color-secondary transition" data-bs-toggle="modal" data-bs-target="#modalpelanggan">
			Cari Pelanggan
			</button>
         <div class="card-body">
			@include('transaction._modalpelanggan')
		</div>
      </div>
   </div>   
   <div class="row row-cols-1 row-cols-md-2">
      <div class="col">
         <div class="form-floating mb-3">
            <input type="text" class="form-control border-0" id="nama" name="nama" placeholder="Your Name" readonly>
            <label class="transition" for="nama">Nama Lengkap</label>
         </div>
      </div>
      <div class="col">
         <div class="form-floating mb-3">
            <input type="text" class="form-control border-0" id="ktp_pembeli" name="ktp_pembeli" placeholder="Your KTP Id" readonly>
            <label class="transition" for="ktp_pembeli">KTP </label>
         </div>
      </div>
      <div class="col">
         <div class="form-floating mb-3">
            <input type="text" class="form-control border-0" id="telp_pembeli" name="telp_pembeli" placeholder="Your Phone Number" readonly>
            <label class="transition" for="telp_pembeli">Telepon</label>
         </div>
      </div>
   </div>
   <div class="form-floating mb-3">
      <textarea class="form-control border-0" placeholder="Leave a Address here" id="alamat" name="alamat" style="height: 7.5rem;" disabled></textarea>
      <label for="alamat" class="transition">Alamat Lengkap</label>
   </div>

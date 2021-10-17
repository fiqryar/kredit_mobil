<div class="modal fade" id="modalcreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl">
      <form action="/dashboard/cars/store" method="POST" enctype="multipart/form-data">
      @csrf
         <div class="modal-content">
            <div class="modal-header bg-white p-3 d-flex">
               <h6 class="modal-title t-color-secondary t-semibold m-0 float-start">Mobil</h6>
               <div class="group-action">
                  <button type="submit" class="btn btn-sm bg-color-secondary text-white hover-shadow hover-translateY-1px transition float-end rounded-0 rounded-end">Tambah Mobil</button>
                  <button type="button" class="btn btn-sm bg-color-lightgray text-white hover-shadow hover-translateY-1px transition float-end rounded-0 rounded-start" data-bs-dismiss="modal" aria-label="Close">Batal</button>
               </div>
            </div>
            <div class="modal-body">
               <div class="ps-lg-3">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group mb-3">
                           <label for="merk" class="form-label">Merk Mobil</label>
                           <input type="text" class="form-control @error('merk') is-invalid @enderror" id="merk" name="merk" placeholder="e.g Tesla" value="{{ old('merk') }}">
                           @error('merk')
                              <span class="invalid-feedback">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group mb-3">
                           <label for="type" class="form-label">Tipe Mobil</label>
                           <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="e.g Sport" value="{{ old('type') }}">
                           @error('type')
                              <span class="invalid-feedback">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group mb-3">
                           <label for="harga_mobil" class="form-label">Harga Mobil</label>
                           <input type="text" class="form-control @error('harga_mobil') is-invalid @enderror" id="harga_mobil" name="harga_mobil" placeholder="e.g 2.000.000.000" value="{{ old('harga_mobil') }}">
                           @error('harga_mobil')
                              <span class="invalid-feedback">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group mb-3">
                           <label for="gambar" class="form-label">Gambar Mobil</label>
                           <input type="file" class="form-control @error('file') is-invalid @enderror" id="gambar" name="gambar">
                           @error('gambar')
                              <span class="invalid-feedback">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group mb-3">
                           <label for="warna" class="form-label">Warna Mobil</label>
                           <input type="color" class="form-control form-control-color @error('warna') is-invalid @enderror" id="warna" name="warna" value="{{ old('warna') }}">
                           @error('warna')
                              <span class="invalid-feedback">{{ $message }}</span>
                           @enderror
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
   </div>
</div>
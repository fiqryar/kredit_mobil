<x-app-dashboard>
	<x-slot name="header">
		<h2 class="t-bold t-color-secondary">Mobil</h2>
		{{-- <a href="/dashboard/cars/create" class="btn btn-sm shadow-md hover-translateY-2px text-white bg-color-secondary t-semibold t-size-sm transition hover-shadow btn-icon"><i class="material-icons text-white">add_circle</i></a> --}}
		<button type="button" class="btn btn-sm shadow-md hover-translateY-2px text-white bg-color-secondary t-semibold t-size-sm transition hover-shadow btn-icon" data-bs-toggle="modal" data-bs-target="#modalcreate"><i class="material-icons text-white">add_circle</i></button>
	</x-slot>
	@include('dashboard._createcars')
	@if ($errors->all())
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			Your data was invalid
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@elseif (session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif
	<div class="card p-0 shadow-md border-0">
		<div class="card-header border-0 bg-white p-3 d-flex justify-content-between">
			<h6 class="t-color-secondary t-semibold m-0">Daftar Mobil</h6>
			<h6 class="t-color-secondary t-semibold m-0 t-size-sm">25 Entries</h6>
		</div>
		<div class="card-body p-0">
			<div class="table-responsive">
				<table class="table align-middle">
					<thead class="bg-color-deactive">
						<tr>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Kode Mobil</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Merk</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Warna</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Harga</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold">Status</th>
							<th class="border-0 t-color-lightgray t-size-sm ps-3 t-semibold"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $item)
						<tr>
							<td class="ps-3 py-4 t-color-aliceblue">{{ $item->kode_mobil }}</td>
							<td class="ps-3 py-4 t-color-aliceblue">{{ $item->merk }}</td>
							<td class="ps-3 py-4 t-color-aliceblue">
								<input type="color" class="form-control form-control-color" disabled value="{{ $item->warna }}">
							</td>
							<td class="ps-3 py-4 t-color-aliceblue">Rp. {{ number_format($item->harga_mobil, 0, ',', '.') }}</td>
							<td class="ps-3 py-4 t-color-aliceblue">
								<span class="badge rounded-pill bg-color-red">Terjual</span>
							</td>
							<td class="ps-3 py-4 d-flex">
								<a href="#" class="btn btn-sm bg-color-green text-white rounded-start rounded-0 hover-shadow hover-translateY-2px transition btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="material-icons text-white">visibility</i></a>
								<a href="{{ route('mobil.edit', $item->kode_mobil) }}" class="btn btn-sm bg-color-blue text-white rounded-end rounded-0 hover-shadow hover-translateY-2px transition btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="material-icons text-white">edit</i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</x-app-dashboard>
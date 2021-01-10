@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Complex Layout</h5>
				<p>More complex layouts can also be created with the grid system.</p>
				<form action="{{ (empty($data)) ? route('blog.add.save') : route('blog.update.save', $data->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4" class="active">Image Blog *</label>
							<input type="file" class="form-control" id="" placeholder="Image Slider" name="image">
						</div>
						<div class="form-group col-md-6">
							<label for="title">Title</label>
							<input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ (empty($data) ? '' : $data->title) }}">
						</div>
					</div>

					<label>Content Blog *</label>
					<div class="form-group">
						<textarea class="form-control" id="content" name="content" rows="10">{{ (empty($data) ? '' : $data->content) }}</textarea>
					</div>

					<button type="submit" class="btn btn-primary">Sign in</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
	$(document).ready(function() {
		$('#content').summernote({
			placeholder: 'Tinggal di kawasan hunian yang mampu menjadikan kualitas hidup kita lebih baik, serta memiliki nilai jual hunian yang mampu menjadi alternatif investasi masa depan yang menguntungkan. Itulah konsep promosi Sedayu City Kelapa Gading Jakarta yang saat ini sedang menjadi pembicaraan pelaku properti di Jakarta.<blockquote>Sebuah konsep promosi yang menarik dan amat jarang didapatkan di proyek properti yang saat ini sedang banyak di pasarkan di Jakarta. Karena bukan perkara mudah untuk mendapatkan dan merencanakan sebuah hunian yang bisa menghadirkan ke-2 konsep tersebut dalam satu kesatuan utama yang akan membuat konsumen dan investor beruntung membeli unit properti di kawasan tersebut.</blockquote>Bicara soal progress penjualan yang saat ini sedang berjalan dengan model promosi Sedayu City Kelapa Gading Jakarta. Hingga saat ini memang terlihat cukup menarik bagi konsumen dan investor. Proyek yang direncanakan akan diserah terimakan kepada konsumen pada bulan September 2018 ini memang cukup fenomenal. Angsurannya bisa di cicil panjang yaitu selama 5 tahun. Wajar jika pada akhirnya banyak peminat yang ingin mendapatkan unit-unit di Sedayu City, seperti ruko/rukan food street. Ditawarkan dengan harga Rp5,9 miliar dengan spesifikasi bangunan 4,5 lantai sejak di launching pada April 2017 lalu, hingga saat ini sudah laku terjual 75%. #try',
			tabsize: 1,
			height: 300
		});
	});
</script>
@endpush
@extends('layouts.admin.app')
@section('content')
<?php
	use App\Models\Testimonies;
?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">General Web Setting</h5>
				<p>Mohon jangan sembarangan mengubah, menambah, menghapus data <code>slug</code> field, perubahan yang terjadi dapat mengakibatkan error pada website. Resolve error hanya dapat di lakukan dengan cara drop semua data dan menggantinya dengan default data.</p>
				<p>Tanda <code>* (bintang)</code> di label input berarti field input wajib di isi dan akan error jika anda mengosonginya, dan sebaliknya jika tidak ada tanda <code>* (bintang)</code> maka field input tidak wajib di isi.</p>
				<form action="{{ (empty($data)) ? route('galeri.add.save') : route('galeri.update.save', $data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputEmail4" class="active">Image Slider *</label>
							<input type="file" class="form-control" id="" placeholder="Image Slider" name="image">
						</div>
						<div class="form-group col-md-4">
							{{-- <label for="testimoni">Testimoni</label> --}}
							<?php
								$testimonies = Testimonies::get();
							?>
							<select name="testimoni_id" id="testimoni_id" class="js-states form-control" tabindex="-1" style="display: none; width: 100%">
							<optgroup label="Nama Klien">
								<option value="">Nama Klien</option>
								@foreach($testimonies as $testimoni)
								<option value="{{ $testimoni->id }}" {{ (empty($data) ? '' : ($data->testimoni_id == $testimoni->id ? 'selected' : '') ) }}>{{ $testimoni->name }}</option>
								@endforeach
							</optgroup>
						</select>
						</div>
						<div class="form-group col-md-4">
							<label for="title">Galeri Title *</label>
							<input type="text" class="form-control" id="title" placeholder="title" name="title" value="{{ (empty($data) ? '' : $data->title) }}">
						</div>
					</div>

					<label>Description *</label>
					<div class="form-group">
						<textarea class="form-control" id="description" name="description" rows="10">{{ (empty($data) ? '' : $data->description) }}</textarea>
					</div>
					<button type="submit" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
@push('css')
  <link href="{{ asset('backend/plugins/select2/css/select2-material.css') }}" rel="stylesheet">   
@endpush
@push('js')
<script src="{{ asset('backend/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
	$(document).ready(function() {
		"use strict";

		$('select').select2();
	});
</script>
@endpush
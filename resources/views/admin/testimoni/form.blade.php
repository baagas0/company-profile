@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Add Testimoni Web</h5>
				<p>Jika anda ingin menambahkan gambar properti untuk testimoni anda dapat saat mengupload galery.</p>
				<form action="{{ (empty($data)) ? route('testimoni.add.save') : route('testimoni.update.save', $data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4" class="active">Image Slider *</label>
							<input type="file" class="form-control" id="" placeholder="Image Slider" name="image">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Link" name="name"  value="{{ (empty($data) ? '' : $data->name) }}">
						</div>
					</div>

					<label>Content *</label>
					<div class="form-group">
						<textarea class="form-control" id="content" name="content" rows="10">{{ (empty($data) ? '' : $data->content) }}</textarea>
					</div>

					
					<button type="submit" class="btn btn-primary">Save</button>
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
		// $('#content').summernote({
		// 	placeholder: '<h4>Pembangunan Berkualitas</h4><p>Perusahaan kontraktor dengan jasa pembangunan gedung bertingkat dan juga perumakan dengan kualitas terbaik di kelasnya.</p>',
		// 	tabsize: 2,
		// 	height: 150
		// });
	});
</script>
@endpush
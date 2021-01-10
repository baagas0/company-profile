@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Complex Layout</h5>
				<p>More complex layouts can also be created with the grid system.</p>
				<form action="{{ (empty($data)) ? route('service.add.save') : route('service.update.save', $data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4" class="active">Icon Service *</label>
							<input type="file" class="form-control" id="" placeholder="File Slider" name="file">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Title</label>
							<input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ (empty($data)) ? '' : $data->title }}">
						</div>
					</div>

					<label>Content Service *</label>
					<div class="form-group">
						<textarea class="form-control" id="content" name="content" rows="10">{{ (empty($data)) ? '' : $data->content }}</textarea>
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
		// $('#content').summernote({
		// 	placeholder: '<h4>Pembangunan Berkualitas</h4><p>Perusahaan kontraktor dengan jasa pembangunan gedung bertingkat dan juga perumakan dengan kualitas terbaik di kelasnya.</p>',
		// 	tabsize: 2,
		// 	height: 150
		// });
	});
</script>
@endpush
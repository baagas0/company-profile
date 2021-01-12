@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Slider Web</h5>
				<p>Tanda <code>* (bintang)</code> di label input berarti field input wajib di isi dan akan error jika anda mengosonginya, dan sebaliknya jika tidak ada tanda <code>* (bintang)</code> maka field input tidak wajib di isi.</p>
				<form action="{{ (empty($data)) ? route('slider.add.save') : route('slider.update.save', $data->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputEmail4" class="active">Image Slider *</label>
							<input type="file" class="form-control" id="" placeholder="Image Slider" name="image">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Link</label>
							<input type="text" class="form-control" id="inputPassword4" placeholder="Link" name="link"  value="{{ (empty($data) ? '' : $data->is_link) }}">
						</div>
					</div>

					<label>Content Slider *</label>
					<div class="form-group">
						<textarea class="form-control" id="content" name="content" rows="10">{{ (empty($data) ? '' : $data->content) }}</textarea>
					</div>

					<div class="form-group">
						<div class="custom-control custom-checkbox">
							<input class="custom-control-input" type="checkbox" id="active" name="active" checked="">
							<label class="custom-control-label" for="gridCheck">
								Active
							</label>
						</div>
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
		$('#content').summernote({
			placeholder: '<h4>Pembangunan Berkualitas</h4><p>Perusahaan kontraktor dengan jasa pembangunan gedung bertingkat dan juga perumakan dengan kualitas terbaik di kelasnya.</p>',
			tabsize: 2,
			height: 150
		});
	});
</script>
@endpush
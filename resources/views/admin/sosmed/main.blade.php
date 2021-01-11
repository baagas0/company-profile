@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">General Web Setting</h5>
				<p>Mohon jangan sembarangan mengubah, menambah, menghapus data <code>slug</code> field, perubahan yang terjadi dapat mengakibatkan error pada website. Resolve error hanya dapat di lakukan dengan cara drop semua data dan menggantinya dengan default data.</p>
				<p>Anda tidak dapat <code>menambah dan menghapus</code> data pada General Web Setting. Penambahan dan penghapusan data akan berakibat fatal pada website.</p>
				<a href="{{ route('sosmed.add') }}" class="btn btn-primary mb-3">Add Data</a>
				<div class="table-container">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Slug</th>
									<th scope="col">Image</th>
									<th scope="col">Title</th>
									<th scope="col">Content</th>
									<th scope="col">Value</th>
									<th scope="col">Act.</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $row)
									<tr>
										<th scope="row">{{ $loop->iteration }}</th>
										<th>{{ $row->slug }}</th>

										<td>
											@if(!empty($row->file))
												@if($row->type == 'icon')
													<i class="{{ $row->file }}"></i>
												@else
													<img src="{{ asset($row->file) }}" class="img-responsive" width="50px">
												@endif
											@endif
										</td>
										<td>{{ $row->title }}</td>
										<td>{!! $row->content !!}</td>
										<td>{{ $row->value }}</td>
										<td>
											<a href="{{ route('about.update', $row->id) }}">
												<span class="material-icons">
													edit
												</span>
											</a>
											<a href="{{ route('about.delete', $row->id) }}">
												<span class="material-icons">
													delete
												</span>
											</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>      
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
@endpush
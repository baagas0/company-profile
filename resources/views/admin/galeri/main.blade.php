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
				<a href="{{ route('galeri.add') }}" class="btn btn-primary mb-3">Add slider</a>
				<div class="table-container">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Image</th>
									<th scope="col">Testimoni</th>
									<th scope="col">Title</th>
									<th scope="col">Description</th>
									<th scope="col">Act.</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $row)
									<?php
										if ($row->testimoni_id) {
											$testimoni = Testimonies::findOrFail($row->testimoni_id);
										}
									?>
									<tr>
										<th scope="row">{{ $loop->iteration }}</th>
										<td><img src="{{ asset($row->image) }}" class="img-responsive" width="50px"></td>
										<td>{{ (!empty($testimoni->name)) ?  $testimoni->name : 'No Testimoni'}}</td>
										<td>{{ $row->title }}</td>
										<td>{{ $row->description }}</td>
										<td>
											<a href="{{ route('galeri.update', $row->id) }}">
												<span class="material-icons">
													edit
												</span>
											</a>
											<a href="{{ route('galeri.delete', $row->id) }}">
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
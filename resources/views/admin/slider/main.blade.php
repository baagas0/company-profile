@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Slider Web</h5>
				<p>Mohon jangan sembarangan mengubah, menambah, menghapus data <code>slug</code> field, perubahan yang terjadi dapat mengakibatkan error pada website. Resolve error hanya dapat di lakukan dengan cara drop semua data dan menggantinya dengan default data.</p>
				<a href="{{ route('slider.add') }}" class="btn btn-primary mb-3">Add slider</a>
				<div class="table-container">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Image</th>
									<th scope="col">Content</th>
									<th scope="col">With URL</th>
									<th scope="col">Active?</th>
									<th scope="col">Act.</th>
								</tr>
							</thead>
							<tbody>
								@foreach($data as $row)
									<tr>
										<th scope="row">{{ $loop->iteration }}</th>
										<td><img src="{{ asset($row->image) }}" class="img-responsive" width="50px"></td>
										<td>{!! $row->content !!}</td>
										<td>{!! (empty($row->is_link) ? '<span class="badge badge-danger">Without Read More</span>' : '<a href="'.$row->is_link.'" class="badge badge-success" target="__blank">'.$row->is_link.'</a>') !!}</td>

										<td><span class="badge badge-{{ ($row->is_active == 1) ? 'success' : 'danger' }}">{{ ($row->is_active == 1) ? 'Active' : 'Not Active' }}</span></td>
										<td>
											<a href="{{ route('slider.update', $row->id) }}">
												<span class="material-icons">
													edit
												</span>
											</a>
											<a href="{{ route('slider.delete', $row->id) }}">
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
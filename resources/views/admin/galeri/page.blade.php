@extends('layouts.admin.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Responsive Tables</h5>
				<p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code>.table</code> with <code>.table-responsive</code>.</p>
				{{-- <a href="{{ route('service.add') }}" class="btn btn-primary mb-3">Add Service</a> --}}
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
											<img src="{{ asset($row->file) }}" class="img-responsive" width="50px">
											@endif
										</td>
										<td>{{ $row->title }}</td>
										<td>{!! $row->content !!}</td>
										<td>{{ $row->value }}</td>
										<td>
											<a href="{{ route('galeri.update.page', $row->id) }}">
												<span class="material-icons">
													edit
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
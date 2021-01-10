<div class="table-container" style="width: 100%!important">
	<div class="table-responsive" style="width: 100%!important">
		<table class="table" style="width: 100%!important">
			<thead style="width: 100%!important">
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
						<a href="{{ route('..setting.form', $row->id) }}">
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
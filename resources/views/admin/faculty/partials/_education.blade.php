<div class="row">
	<div class="col-sm-12">
		<h3>
			Education
			<div class="pull-right">
				<a class="btn btn-success" href="{{ url("/admin/faculty/{$faculty->id}/education/create") }}">
					<i class="fa fa-plus"></i> Add
				</a>	
			</div>
		</h3>
		<hr>

		@if(count($faculty->education))
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Degree</th>
                    <th>Institute</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($faculty->education as $education)
                    <tr>
                        <td>{{ $education->name_of_degree }}</td>
                        <td>{{ $education->institute }}</td>
                        <td>{{ $education->year }}</td>
                        <td>
                            <a href="{{ url("/admin/faculty/{$faculty->id}/education/{$education->id}") }}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{ url("/admin/faculty/{$faculty->id}/education/{$education->id}/edit") }}" class="btn btn-xs btn-info"><i class="fa fa-edit"></i></a>
                            <a href="{{ url("/admin/faculty/{$faculty->id}/education/{$education->id}") }}" class="btn btn-xs btn-danger" data-token="{{ csrf_token() }}" data-method="DELETE" data-confirm="true"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
		
	</div>
</div>
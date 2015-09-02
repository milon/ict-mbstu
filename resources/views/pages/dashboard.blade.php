@extends('layout.admin')

@section('body')
	<h1>Welcome to Dashboard</h1>
	<hr>

	<div class="row">

		<div class="col-sm-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Faculty</h3>
				</div>
				<div class="panel-body text-center">
					<h1>{{ $faculty }}</h1>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Research Group</h3>
				</div>
				<div class="panel-body text-center">
					<h1>{{ $researchGroup }}</h1>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Research Area</h3>
				</div>
				<div class="panel-body text-center">
					<h1>{{ $researchArea }}</h1>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title text-center">News</h3>
				</div>
				<div class="panel-body text-center">
					<h1>{{ $news }}</h1>
				</div>
			</div>
		</div>

	</div>
@endsection
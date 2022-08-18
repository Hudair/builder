@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-12">

		<div class="card mt-2">
			<span class="panel-title d-none">{{ _lang('Project List') }}</span>		
			<div class="card-body">


				<table id="projects_table" class="table table-bordered">
					<thead>
					    <tr>
							<th>{{ _lang('Name') }}</th>
							<th class="text-center">{{ _lang('Action') }}</th>
					    </tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js-script')
<script src="{{ asset('public/backend/assets/js/ajax-datatable/projects.js') }}"></script>
@endsection
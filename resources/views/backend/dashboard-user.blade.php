@extends('layouts.app')

@section('content')

@if (\Session::has('paypal_success'))
  <div class="alert alert-success text-center">
	<b>{{ \Session::get('paypal_success') }}</b>
  </div>
  <br>
@endif

@php 
$currency = currency(); 
$date_format = get_company_option('date_format','Y-m-d');
@endphp


<div class="alert alert-warning text-center">
	<b>{{ _lang('You can assign a custom subdomains to display projects by changing it for each project from PROJECT SETTINGS') }}</b>
</div>

<!--Start Card-->
<div class="row d-flex align-items-stretch">
  <!-- Panel 1 -->
  <div class="col-md-12">
	 <div class="card h-100">
		<div class="card-body">
		    <h4 class="header-title mt-0">{{ _lang('My Recent Websites') }}</h4>
		    <div class="table-responsive card-scroll">
			    <table class="table">
				      <thead>
					    <tr>
							<th>{{ _lang('Name') }}</th>	
							<th class="text-center">{{ _lang('Action') }}</th>
					    </tr>
					</thead>
					<tbody>
						@foreach($projects->take(10) as $project)
						    <tr>
								<td><a href="{{ action('ProjectController@edit', $project->id) }}">{{ $project->name }}</a></td>
								<td>
									<form action="{{ action('ProjectController@destroy', $project['id']) }}" class="text-center" method="post">
										<a href="{{ action('ProjectController@edit', $project['id']) }}" data-title="{{_lang('Edit Project Settings')}}" class="btn btn-primary btn-xs ajax-modal"><i class="ti-notepad"></i> {{_lang('Settings')}}</a>
										<a href="{{ action('ProjectController@edit', $project['id']) }}" data-title="{{_lang('Update Project')}}" class="btn btn-warning btn-xs"><i class="ti-pencil"></i> {{_lang('Edit')}}</a>
										{{ csrf_field() }}
										<input name="_method" type="hidden" value="DELETE">
										<button class="btn btn-danger btn-xs btn-remove" type="submit"><i class="ti-eraser"></i>  {{_lang('Delete')}}</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	 </div>
  </div>
  <!-- End Panel 1 -->
</div>

@endsection

@section('js-script')
<script src="{{ asset('public/backend/assets/js/ajax-datatable/projects.js') }}"></script>
@endsection

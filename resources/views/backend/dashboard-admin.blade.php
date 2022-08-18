@extends('layouts.app')

@section('content')


@if(env('DEMO_MODE') == true)
<div class="alert alert-warning text-center">
	<b>{{ _lang("It’s recommend to login with user account if you want to test the builder, because default admin account is for the general mangament, manage users and packages.")}}</b>
</div>
@endif

<div class="row" id="charts" style="position: relative; zoom: 1;">
	<div class="col-sm-6 col-md-3">
		<div class="kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-warning">
			<div class="kt-portlet__body kt-portlet__body--fluid">
				<div class="kt-widget26">
					<div class="kt-widget26__content">
						<span class="kt-widget26__number "><span class="kt-currency_before"></span>{{ $total_user }}<span class="kt-currency_after"></span></span>
						<span class="kt-widget26__desc">{{ _lang('Total Users') }}</span>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="col-sm-6 col-md-3">
		<div class="kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-success">
			<div class="kt-portlet__body kt-portlet__body--fluid">
				<div class="kt-widget26">
					<div class="kt-widget26__content">
						<span class="kt-widget26__number kt-font-success"><span class="kt-currency_before"></span>{{ $paid_user }}<span class="kt-currency_after"></span></span>
						<span class="kt-widget26__desc">{{ _lang('Paid Users') }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-brand">
			<div class="kt-portlet__body kt-portlet__body--fluid">
				<div class="kt-widget26">
					<div class="kt-widget26__content">
						<span class="kt-widget26__number kt-font-brand">{{ $trial_user }}</span>
						<span class="kt-widget26__desc">{{ _lang('Trial Users') }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="kt-portlet kt-portlet--height-fluid kt-portlet--border-bottom-dark">
			<div class="kt-portlet__body kt-portlet__body--fluid">
				<div class="kt-widget26">
					<div class="kt-widget26__content">
						<span class="kt-widget26__number kt-font-dark">{{ decimalPlace($total_payment, currency()) }}</span>
						<span class="kt-widget26__desc">{{ _lang('Total Payment') }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--New Users-->
<div class="row">
   <div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title mt-0 mb-3">{{ _lang('New Registered Users') }}</h4>                                    
				<div class="table-responsive browser_users">
					<table class="table table-bordered mb-0">
						<thead class="thead-light">
							<tr>
								<th>{{ _lang('Name') }}</th>
								<th>{{ _lang('Company') }}</th>
								<th>{{ _lang('Email') }}</th>
								<th>{{ _lang('Package') }}</th>
								<th class="text-center">{{ _lang('Membership') }}</th>
								<th class="text-center">{{ _lang('Details') }}</th>
							</tr>
						</thead>
						<tbody>
						    @if($news_users->count() > 0)
								@foreach($news_users as $user)
									<tr id="row_{{ $user->id }}">
										<td class='name'>
										<div class="media">
											<img src="{{ $user->profile_picture != "" ? asset('public/uploads/profile/'.$user->profile_picture) : asset('public/images/avatar.png') }}" alt="avatar" class="thumb-sm rounded-circle mr-2">                                       
											<div class="media-body align-self-center text-truncate">
												<h6 class="mt-0 text-dark">{{ _lang('USER ID') }} - #{{ $user->id }}</h6>
												<p class="text-muted mb-0">{{ $user->name }}</p>
											</div><!--end media-body-->
										</div>
										</td>
										<td class='company'>{{ $user->company->business_name }}</td>			
										<td class='email'>{{ $user->email }}</td>			
										<td class='package_id'>{{ $user->company->package->package_name }}({{ ucwords($user->company->package_type) }})</td>						
										<td class='membership_type text-center'>{!! $user->company->membership_type == 'trial' ? clean(status(ucwords($user->company->membership_type), 'danger')) : clean(status(ucwords($user->company->membership_type), 'success')) !!}</td>		
										<td class="text-center">
										<a href="{{ action('UserController@show', $user['id'])}}" data-title="{{ $user->name }}" class="btn btn-primary btn-xs ajax-modal">{{ _lang('View') }}</a>
										</td>
									</tr>
								@endforeach
							@else
								<tr >
									<td colspan="6">{{ _lang('No data found') }}.</td>
								</tr>
							@endif
						</tbody>
					</table> <!--end table-->                                               
				</div><!--end /div-->
			</div><!--end card-body-->
		</div><!--end card-->
	</div>
</div>
<!--End New Users-->


<!--Recent Payments-->
<div class="row">
   <div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title mt-0 mb-3">{{ _lang('Recent Payments') }}</h4>                                    
				<div class="table-responsive browser_users">
					<table class="table table-bordered mb-0">
						<thead class="thead-light">
							<tr>
								<th>{{ _lang('Date') }}</th>
								<th>{{ _lang('Company') }}</th>
								<th>{{ _lang('Package') }}</th>
								<th>{{ _lang('Method') }}</th>
								<th class="text-right">{{ _lang('Amount') }}</th>
							</tr>
						</thead>

						<tbody>
							@php $date_format = get_option('date_format','Y-m-d'); @endphp
							@php $time_format = get_option('time_format',24) == '24' ? 'H:i' : 'h:i A'; @endphp

						    @if($news_users->count() > 0)
								@foreach($recent_payment as $history)
									<tr>
										<td>{{ date("$date_format $time_format",strtotime($history->created_at)) }}</td>
										<td>{{ $history->company->business_name }}</td>
										<td>{{ $history->title }}({{ ucwords($history->package_type) }})</td>
										<td>{{ $history->method }}</td>					
										<td class="text-right"><b>{{ $history->currency.' '.$history->amount }}</b></td>			
									</tr>
								@endforeach
							@else
								<tr >
									<td colspan="5">{{ _lang('No data found') }}.</td>
								</tr>
							@endif
						</tbody>
					</table> <!--end table-->                                               
				</div><!--end /div-->
			</div><!--end card-body-->
		</div><!--end card-->
	</div>
</div>
<!--End Recent Payments-->

@endsection
@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-12">
	<div class="card">
	<div class="card-body">
		
		@php $date_format = get_company_option('date_format','Y-m-d'); @endphp
			
	    <h4 class="d-none panel-title">{{ _lang('Subscription Details') }}</h4>
	    <table class="table table-bordered">
			@if($user->user_type == 'user')
				<tr><td>{{ _lang('Package Name') }}</td><td>{{ $user->company->package->package_name }}</td></tr>	
				<tr><td>{{ _lang('Package Valid Until') }}</td><td>{{ date($date_format, strtotime($user->company->valid_to)) }}</td></tr>	
		        <tr>
		        	<td>{{ _lang('Membersip Type') }}</td><td>{!! $user->company->membership_type == 'trial' ? clean(status(ucwords($user->company->membership_type), 'danger')) : clean(status(ucwords($user->company->membership_type), 'success')) !!}</td>
		        </tr>
			@endif
	    </table>

	    @if($user->user_type == 'user')
		    <table class="table table-striped">
		    	<tr>
		    		<td colspan="2" class="text-center"><b>{{ _lang('Package Details') }}</b></td>
		    	</tr>
		    	<tr>
		    		<td><b>{{ _lang('Feature') }}</b></td>
		    		<td class="text-center"><b>{{ _lang('Avaialble Limit') }}</b></td>
		    	</tr>
		    	<tr>
		    		<td>{{ _lang('Websites Limit') }}</td>
		    		<td class="text-center">{{ $user->company->websites_limit }}</td>
		    	</tr>
		    	<tr>
		    		<td>{{ _lang('Recurring Transaction') }}</td>
		    		<td class="text-center">{{ ucwords($user->company->recurring_transaction) }}</td>
		    	</tr>
		    	<tr>
		    		<td>{{ _lang('Online Payment') }}</td>
		    		<td class="text-center">{{ ucwords($user->company->online_payment) }}</td>
		    	</tr>
		    </table>
	    @endif
	</div>
  </div>
 </div>
</div>
@endsection



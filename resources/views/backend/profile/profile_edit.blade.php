@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
		    <h5 class="card-header bg-primary text-white mt-0 panel-title">{{ _lang('Profile Settings') }}</h5>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<form action="{{ url('profile/update')}}" autocomplete="off" class="form-horizontal form-groups-bordered validate" enctype="multipart/form-data" method="post">
							@csrf
							<div class="form-group">
								<label class="control-label">{{ _lang('Name') }}</label>
								<input type="text" class="form-control" name="name" value="{{$profile->name}}" required>
							</div>

							<div class="form-group">
								<label class="control-label">{{ _lang('Email') }}</label>
								<input type="text" class="form-control" name="email" value="{{ $profile->email }}" required>
							</div>

							<div class="form-group">
								<label class="control-label">{{ _lang('Language') }}</label>
								<select class="form-control select2" name="language">
									<option value="">{{ _lang('-- Select One --') }}</option>
									{{ load_language( $profile->language ) }}
								</select>
							</div>

							<div class="form-group">
								<label class="control-label">{{ _lang('Image') }} (300 X 300)</label>
								<input type="file" class="form-control dropify" data-default-file="{{ $profile->profile_picture != "" ? asset('public/uploads/profile/'.$profile->profile_picture) : '' }}" name="profile_picture" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG">
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">{{ _lang('Update Profile') }}</button>
							</div>
						</form>
					</div>	

                    @if(Auth::user()->user_type == 'user')
	                    <div class="col-md-6">
	                    	 <table class="table table-striped table-bordered">
						    	<tr>
						    		<td colspan="2" class="text-center"><b>{{ $profile->company->package->package_name.' '._lang('Package Details') }}</b></td>
						    	</tr>
						    	<tr>
						    		<td><b>{{ _lang('Feature') }}</b></td>
						    		<td class="text-center"><b>{{ _lang('Avaialble Limit') }}</b></td>
						    	</tr>
						    	<tr>
						    		<td>{{ _lang('Websites Limit') }}</td>
						    		<td class="text-center">{{ $profile->company->websites_limit }}</td>
						    	</tr>
						    	<tr>
						    		<td>{{ _lang('Recurring Transaction') }}</td>
						    		<td class="text-center">{{ $profile->company->recurring_transaction }}</td>
						    	</tr>
						    	<tr>
						    		<td>{{ _lang('Online Payment') }}</td>
						    		<td class="text-center">{{ $profile->company->online_payment }}</td>
						    	</tr>
						    </table>
	                    </div>
                    @endif


				</div>	
			</div>
		</div>
	</div>
</div>
@endsection


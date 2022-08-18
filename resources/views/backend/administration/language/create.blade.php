@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-4">
		<div class="card">		
			<span class="panel-title d-none">{{ _lang('Add New Language') }}</span>

			<div class="card-body">
			  <form method="post" class="validate" autocomplete="off" action="{{ url('languages') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="row">
				    <div class="col-md-12">
						<div class="form-group">
							<label class="control-label">{{ _lang('Language Name') }}</label>						
							<input type="text" class="form-control" name="language_name" value="{{ old('language_name') }}" required>
						</div>
						<div class="form-group">
							<label class="control-label">{{ _lang('Language Direction') }}</label>						
							<select class="form-control auto-select" data-selected="{{ old('language_direction','ltr') }}" name="language_direction" required>
								<option value="ltr">{{ _lang('LTR') }}</option>
								<option value="rtl">{{ _lang('RTL') }}</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label">{{ _lang('Language Flag') }}</label>					
							<input type="file" class="form-control dropify" name="flag" data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG" required>
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="form-group">
							<button type="submit" class="btn btn-primary">{{ _lang('Create Language') }}</button>
						</div>
					</div>
				</div>
			  </form>
			</div>
	  	</div>
 	</div>
</div>
@endsection



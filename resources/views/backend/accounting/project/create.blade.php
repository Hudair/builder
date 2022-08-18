@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-6">
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body d-flex align-items-center py-0 mt-8">
                <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                    <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary">{{_lang('Novi builder')}}</a>
                    <span class="font-weight-bold text-muted font-size-lg">{{_lang('200+ Elements based on Bootstrap 4 to create new pages.')}}</span>
                </div>
                <a href="{{url('builder/novi')}}" class="align-self-center h-50px btn btn-success btn-xs">{{_lang('Open Builder')}}</a>
            </div>
            <!--end::Body-->
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Body-->
            <div class="card-body d-flex align-items-center py-0 mt-8">
                <div class="d-flex flex-column flex-grow-1 py-2 py-lg-5">
                    <a href="#" class="card-title font-weight-bolder text-dark-75 font-size-h5 mb-2 text-hover-primary">{{_lang('Lara builder')}}</a>
                    <span class="font-weight-bold text-muted font-size-lg">{{_lang('with 400+ Elements the effort is minimized due to our new drag and drop improved builder.')}}</span>
                </div>
                <a href="{{url('builder/lara')}}" class="align-self-center h-50px btn btn-success btn-xs">{{_lang('Open Builder')}}</a>
            </div>
            <!--end::Body-->
        </div>
    </div>
</div>

@endsection
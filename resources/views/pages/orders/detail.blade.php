@extends('layouts.admin')

@section('styles')
<style>
    .card-body .copybtn{
        width: 30px;
        height: 30px;
        background: transparent;
        color: #fff;
        font-size: 14px;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        float: right;
        padding: 0;
        color: #5784f5;
    }
    
    .table-bordered td {
        text-align: center;
    }
    
    .modal-body-img{
        width: 300px;
        height: 300px;
        margin: 0 auto;
    }
    
    .modal-body-img figure{
        width: 100%;
        height: 100%;
    }
    
    .modal-body-img figure img{
        width: 100%;
        height: 100%;
    }
</style>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('cruds.registration.title_1')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('global.home')</a></li>
                        <li class="breadcrumb-item active">@lang('cruds.registration.title_1')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">@lang('cruds.registration.title_table_1')</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-responsive-lg">
                                <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>@lang('cruds.registration.fields.username')</th>
                                        <th>@lang('cruds.registration.fields.gender')</th>
                                        <th>@lang('cruds.registration.fields.birthdate')</th>
                                        <th>@lang('cruds.registration.fields.phone')</th>
                                        <th>@lang('cruds.registration.fields.email')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $registration->id }}</td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                {{ $registration->last_name.' '.$registration->first_name }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ $registration->last_name.' '.$registration->first_name }}" title="{{ $registration->last_name.' '.$registration->first_name }}" class="btn copybtn"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                {{ $registration->gender == "men" ? "Erkak" : "Ayol" }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                {{ date('d-m-Y', strtotime($registration->birthdate)) }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ date('d-m-Y', strtotime($registration->birthdate)) }}" title="{{ date('d-m-Y', strtotime($registration->birthdate)) }}" class="btn copybtn"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                {{ "+998".''.$registration->phone }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ '+998'.''.$registration->phone }}" title="{{ '+998'.''.$registration->phone }}" class="btn copybtn"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                {{ $registration->email }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ $registration->email }}" title="{{ $registration->email }}" class="btn copybtn"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr class="text-center">
                                        <th colspan="3">@lang('cruds.registration.fields.family_status')</th>
                                        <th>@lang('cruds.registration.fields.country')</th>
                                        <th>@lang('cruds.registration.fields.region')</th>
                                        <th>@lang('cruds.registration.fields.district')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex align-items-center justify-content-center">
                                                @if($registration->family_status == "Married")
                                                    Uylangan / turmushga chiqgan
                                                @elseif($registration->family_status == "Unmarried")
                                                    Uylanmagan / turmushga chiqmagan
                                                @elseif($registration->family_status == "Divorced")
                                                    Ajrashgan / ajrashuvda
                                                @else
                                                    Beva / yolg'iz
                                                @endif
                                                <button data-toggle="tooltip" data-clipboard-text="{{ $registration->family_status }}" title="{{ $registration->family_status }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                {{ $registration->country->name_en }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ $registration->country->name_en }}" title="{{ $registration->country->name_en }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                {{ $registration->region_name->name_en }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ $registration->region_name->name_en }}" title="{{ $registration->region_name->name_en }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                {{ $registration->district_name->name_en }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ $registration->district_name->name_en }}" title="{{ $registration->district_name->name_en }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr class="text-center">
                                        <th>@lang('cruds.registration.fields.passport_num')</th>
                                        <th colspan="2">@lang('cruds.registration.fields.passport_expire_date')</th>
                                        <th colspan="2">@lang('cruds.registration.fields.passport_address')</th>
                                        <th>@lang('cruds.registration.fields.education')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                {{ $registration->passport_number }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ $registration->passport_number }}" title="{{ $registration->passport_number }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <div class="d-flex align-items-center justify-content-center">
                                                {{ date('d-m-Y', strtotime($registration->expired_date)) }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ date('d-m-Y', strtotime($registration->expired_date)) }}" title="{{ date('d-m-Y', strtotime($registration->expired_date)) }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <div class="d-flex align-items-center justify-content-center">
                                                {{ $registration->passport_given_address }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ $registration->passport_given_address }}" title="{{ $registration->passport_given_address }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                {{ $registration->education_name->name_en }}
                                                <button data-toggle="tooltip" data-clipboard-text="{{ $registration->education_name->name_en }}" title="{{ $registration->education_name->name_en }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr class="text-center">
                                        <th colspan="2">@lang('cruds.registration.fields.application_st')</th>
                                        <th colspan="2">@lang('cruds.registration.fields.pay_status')</th>
                                        <th colspan="2">@lang('cruds.registration.fields.user_img')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2">{{ $registration->application_status }}</td>
                                        <td colspan="2">{{ $registration->payment_status == "0" ? "To'lanmadi" : "To'landi" }}</td>
                                        <td colspan="2">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a  href="{{route('download', $registration->user_image)}}">{{ $registration->user_image }}</a>
                                                <button data-toggle="modal" data-target="#modal-lg_{{$registration->id}}" class="copybtn ml-3"><i class="fas fa-eye"></i></button>
                                                <div class="modal fade" id="modal-lg_{{$registration->id}}">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">@lang('cruds.registration.fields.username'): {{ $registration->last_name.' '.$registration->first_name }}</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="modal-body-img">
                                                                    <figure>
                                                                        <img src="{{asset('images/'.$registration->user_image)}}" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" id="closeModel" class="btn btn-secondary" data-dismiss="modal">@lang('cruds.registration.fields.close')</button>
                                                                <a href="{{route('download', $registration->user_image)}}" type="button" class="btn btn-primary">@lang('cruds.registration.fields.download')</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @if(isset($wife))
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">@lang('cruds.registration.title_table_2')</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-responsive-lg">
                                    <thead>
                                        <tr class="text-center">
                                            <th>@lang('cruds.registration.fields.user_id')</th>
                                            <th>@lang('cruds.registration.fields.username')</th>
                                            <th>@lang('cruds.registration.fields.gender')</th>
                                            <th>@lang('cruds.registration.fields.birthdate')</th>
                                            <th>@lang('cruds.registration.fields.education')</th>
                                            <th>@lang('cruds.registration.fields.user_img')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ $wife->user_id }}
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    {{ $wife->last_name.' '.$wife->first_name }}
                                                    <button data-toggle="tooltip" data-clipboard-text="{{ $wife->last_name.' '.$wife->first_name }}" title="{{ $wife->last_name.' '.$wife->first_name }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    {{ $wife->gender == "men" ? "Erkak" : "Ayol" }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    {{ date('d-m-Y', strtotime($wife->birthdate)) }}
                                                    <button data-toggle="tooltip" data-clipboard-text="{{ date('d-m-Y', strtotime($wife->birthdate)) }}" title="{{ date('d-m-Y', strtotime($wife->birthdate)) }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    {{ $wife->education_name->name_en }}
                                                    <button data-toggle="tooltip" data-clipboard-text="{{ $wife->education_name->name_en }}" title="{{ $wife->education_name->name_en }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a href="{{route('download', $wife->user_image)}}">{{ $wife->user_image }}</a>
                                                    <button data-toggle="modal" data-target="#modal-wife-lg_{{$wife->id}}" class="copybtn ml-3"><i class="fas fa-eye"></i></button>
                                                    <div class="modal fade" id="modal-wife-lg_{{$wife->id}}">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">@lang('cruds.registration.fields.username'): {{ $wife->last_name.' '.$wife->first_name }}</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="modal-body-img">
                                                                        <figure>
                                                                            <img src="{{asset('images/'.$wife->user_image)}}" alt="">
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="closeModel" class="btn btn-secondary" data-dismiss="modal">@lang('cruds.registration.fields.close')</button>
                                                                    <a href="{{route('download', $wife->user_image)}}" type="button" class="btn btn-primary">@lang('cruds.registration.fields.download')</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr class="text-center">
                                            <th colspan="2">@lang('cruds.registration.fields.country')</th>
                                            <th colspan="2">@lang('cruds.registration.fields.region')</th>
                                            <th colspan="2">@lang('cruds.registration.fields.district')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    {{ $wife->family_country_name->name_en }}
                                                    <button data-toggle="tooltip" data-clipboard-text="{{ $wife->family_country_name->name_en }}" title="{{ $wife->family_country_name->name_en }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    {{ $wife->family_region_name->name_en }}
                                                    <button data-toggle="tooltip" data-clipboard-text="{{ $wife->family_region_name->name_en }}" title="{{ $wife->family_region_name->name_en }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    {{ $wife->family_district_name->name_en }}
                                                    <button data-toggle="tooltip" data-clipboard-text="{{ $wife->family_district_name->name_en }}" title="{{ $wife->family_district_name->name_en }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
                
                @if($children !== null)
                    @foreach($children as $child)
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">@lang('cruds.registration.title_table_3')</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped table-responsive-lg">
                                        <thead>
                                            <tr class="text-center">
                                                <th>@lang('cruds.registration.fields.user_id')</th>
                                                <th>@lang('cruds.registration.fields.username')</th>
                                                <th>@lang('cruds.registration.fields.gender')</th>
                                                <th>@lang('cruds.registration.fields.birthdate')</th>
                                                <th>@lang('cruds.registration.fields.user_img')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $child->user_id }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        {{ $child->last_name.' '.$child->first_name }}
                                                        <button data-toggle="tooltip" data-clipboard-text="{{ $child->last_name.' '.$child->first_name }}" title="{{ $child->last_name.' '.$child->first_name }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        {{ $child->gender == "men" ? "Erkak" : "Ayol"  }}                                               
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        {{ date('d-m-Y', strtotime($child->birthdate)) }}
                                                        <button data-toggle="tooltip" data-clipboard-text="{{ date('d-m-Y', strtotime($child->birthdate)) }}" title="{{ date('d-m-Y', strtotime($child->birthdate)) }}" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="{{route('download', $child->user_image)}}">{{ $child->user_image }}</a>
                                                        <button data-toggle="modal" data-target="#modal-child-lg_{{$child->id}}" class="copybtn ml-3"><i class="fas fa-eye"></i></button>
                                                        
                                                        <div class="modal fade" id="modal-child-lg_{{$child->id}}">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">@lang('cruds.registration.fields.username'): {{ $child->last_name.' '.$child->first_name }}</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="modal-body-img">
                                                                            <figure>
                                                                                <img src="{{asset('images/'.$child->user_image)}}" alt="">
                                                                            </figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" id="closeModel" class="btn btn-secondary" data-dismiss="modal">@lang('cruds.registration.fields.close')</button>
                                                                        <a href="{{route('download', $child->user_image)}}" type="button" class="btn btn-primary">@lang('cruds.registration.fields.download')</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <thead>
                                            <tr class="text-center">
                                                <th>@lang('cruds.registration.fields.country')</th>
                                                <th colspan="2">@lang('cruds.registration.fields.region')</th>
                                                <th colspan="2">@lang('cruds.registration.fields.district')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $child->family_country_name->name_en }}</td>
                                                <td colspan="2">{{ $child->family_region_name->name_en }}</td>
                                                <td colspan="2">{{ $child->family_district_name->name_en }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('button').tooltip({
        //trigger: 'click',
        placement: 'bottom'
    });

    function setTooltip(btn,message) {
        btn.tooltip('hide')
            .attr('data-original-title', message)
            .tooltip('show');
    }

    function hideTooltip(btn) {
        setTimeout(function() {
            btn.tooltip('hide');
        }, 1000);
    }

    // Clipboard
    var clipboard = new ClipboardJS('button');

    clipboard.on('success', function(e) {
        var btn = $(e.trigger);
        setTooltip(btn,'Copied!');
        hideTooltip(btn);
    });

    clipboard.on('error', function(e) {
        var btn = $(e.trigger);
        setTooltip('Failed!');
        hideTooltip(btn);
    });
</script>
@endsection()

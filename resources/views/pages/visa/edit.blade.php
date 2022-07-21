@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Управление виза</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('global.home')</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('visaIndex') }}">Управление виза</a></li>
                        <li class="breadcrumb-item active">@lang('global.add')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@lang('global.add')</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('visaUpdate', $day->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>@lang('cruds.visa.fields.table-title-2')</label>
                                <div class="input-group date timepicker" id="reservationdatethird" data-target-input="nearest">
                                    <input type="text" name="deadline" id="deadline" class="form-control datetimepicker-input" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask inputmode="numeric" data-target="#reservationdatethird" value="{{ old('date',$day->deadline) }}" readonly required>
                                        <div class="input-group-append" data-target="#reservationdatethird" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <div class="card card-primary card-outline card-tabs">
                                    <div class="card-header p-0 pt-1 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true"><i class="sl-flag flag-uz"></i> UZ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false"><i class="sl-flag flag-ru"></i> RU</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-three-tabContent">
                                            <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>@lang('cruds.visa.fields.table-title-1')</label>

                                                            <input type="text" name="name_uz" class="form-control" value="{{ old('name_uz', $day->name_uz) }}" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>@lang('cruds.visa.fields.table-title-1')</label>

                                                            <input type="text" name="name_ru" class="form-control" value="{{ old('name_ru', $day->name_ru) }}" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group ">
                                <button type="submit" class="btn btn-success float-right">@lang('global.save')</button>
                                <a href="{{ route('visaIndex') }}" class="btn btn-default float-left">@lang('global.cancel')</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('scripts')
    <script>
        $(function() {
            $("#reservationdatethird").datetimepicker({
                // format: 'L',
                format: 'YYYY-MM-DD',
                // viewMode: 'years',
                locale: moment.locale('en', {
                    week: {
                        dow: 1
                    }
                }),
            });
        })
    </script>

    <script src="{{asset('adminLte/moment/moment.min.js')}}"></script>
    <script src="{{asset('adminLte/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
@endsection


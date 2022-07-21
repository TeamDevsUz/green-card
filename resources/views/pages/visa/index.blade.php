@extends('layouts.admin')





@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('cruds.visa.title_index')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('global.home')</a></li>
                        <li class="breadcrumb-item active">@lang('cruds.visa.title_index')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Green Card</h3>
                        @can('permission.add')
                            <a href="{{ route('visaAdd') }}" class="btn btn-success btn-sm float-right">
                                <span class="fas fa-plus-circle"></span>
                                @lang('global.add')
                            </a>
                        @endcan
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Data table -->
                        <table  class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>@lang('cruds.visa.fields.table-title-1')</th>
                                <th>@lang('cruds.visa.fields.table-title-2')</th>
                                <th>@lang('cruds.visa.fields.table-title-3')</th>
                                <th>@lang('global.actions')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($deadline as $day)
                                <tr>
                                    <td>{{$day->id}}</td>
                                    <td>{{$day->{'name_' . $locale} }}</td>
                                    <td>{{$day->deadline}}</td>
                                    <td>{{$day->created_at}}</td>
                                    <td class="text-center">
                                        @can('permission.delete')
                                            <form action="" method="post">
                                                @csrf
                                                <div class="btn-group">
                                                    <a href="{{ route('visaEdit',$day->id) }}" type="button" class="btn btn-info btn-sm"> @lang('global.edit')</a>
                                                </div>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
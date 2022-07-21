@extends('layouts.main')

@section('content')
<section class="services paddingClass-50">
    <div class="container">
        <div class="services__mainBox">
            <div class="white-board"></div>
            <div class="services__mainBox__leftBox">
                <div class="text">
                    <h1 class="text_h1">@lang('global.service-page-title')</h1>
                    <div class="text-content">
                        <p>• @lang('global.service-page-list-1')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• @lang('global.service-page-list-2')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• @lang('global.service-page-list-3')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• @lang('global.service-page-list-4')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• @lang('global.service-page-list-5')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• @lang('global.service-page-list-6')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• @lang('global.service-page-list-7')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;"><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">@lang('global.service-page-list-8')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">@lang('global.service-page-list-9')<br>@lang('global.service-page-list-10')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">@lang('global.service-page-list-11')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">@lang('global.service-page-list-12')<br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;"><br><img src="{{asset('plugins_site/images/use-gerb.png')}}" alt="" width="209" height="209"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
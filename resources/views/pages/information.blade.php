@extends('layouts.main')

@section('content')
<section class="information paddingClass-50">
    <div class="container">
        <div class="information__mainBox">
            <div class="information__mainBox-content">
                <div class="headerline">
                    <span class="masha_index masha_index1" rel="1"></span>
                    @lang('global.information-page-title')
                </div>
                <p>@lang('global.information-page-txt-1')</p>
                <p>@lang('global.information-page-txt-2')</p>
                <p>@lang('global.information-page-txt-3')</p>
                <p>@lang('global.information-page-txt-4')</p>
                <p>@lang('global.information-page-txt-5')</p>
                <p>@lang('global.information-page-txt-6')</p>
                <h3 class="information__mainBox-content-h3">@lang('global.information-page-txt-7')</h3>
                <ul>
                    <li style="text-align:justify;">
                      @lang('global.information-page-txt-8')
                    </li>
                    <li style="text-align:justify;">
                        @lang('global.information-page-txt-9')
                    </li>
                    <li style="text-align:justify;">
                        @lang('global.information-page-txt-10')
                    </li>
                </ul>
                <h3 class="information__mainBox-content-h3">@lang('global.information-page-txt-11')</h3>
                <p>@lang('global.information-page-txt-12')</p>
                <p>@lang('global.information-page-txt-13')</p>
                <p>@lang('global.information-page-txt-14')</p>
                <div style="text-align:justify;">
                    <a href="{{route('siteForm')}}"><b>@lang('global.information-page-txt-15')</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
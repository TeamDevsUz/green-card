@extends('layouts.main')

@section('content')
<section class="content__home paddingClass-50">
    <div class="container">
        <div class="content__home__form__confirmed">
            <h5 class="text-center content__home__header_h5">@lang('global.complet-registr-page-title')</h5>
            <p class="mt-4 content__home__form__confirmed-p">@lang('global.complet-registr-page-txt-1')</p>
            <table class="table table-striped">
                <tbody>
                    @foreach($registration as $item)
                        <tr>
                            <td><b>@lang('global.complet-registr-page-txt-2')</b></td>
                            <td>{{ $item->last_name.' '.$item->first_name }}</td>
                        </tr>
                        <tr>
                            <td><b>ID:</b></td>
                            <td>{{ $item->registration_id }}</td>
                        </tr>
                        <tr>
                            <td><b>@lang('global.registration-page-birthdate')</b></td>
                            <td>{{ date('d-m-Y', strtotime($item->birthdate))}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <p class="content__home__form__confirmed-p">
               @lang('global.complet-registr-page-txt-3')
            </p>
            <p class="content__home__form__confirmed-p">
                @lang('global.complet-registr-page-txt-4')
            </p>
            <p class="content__home__form__confirmed-p">
                @lang('global.complet-registr-page-txt-5')
            </p>
            <p class="content__home__form__confirmed-p">
                UZCARD <b>8600 1404 0456 7506</b> MUSTAFAYEV BAHODIR<br>
                HUMO <b>9860 1701 0941 1646</b> BAKHODIR MUSTAFAEV<br>
                Сбербанк <b>5106 2180 3265 9559</b> BAKHODIR MUSTAFAEV<br>
            </p>
            <p class="content__home__form__confirmed-p"><b style="color: #ff0000;">@lang('global.complet-registr-page-txt-6')</b></p>
            <div class="pay_btns">
                <p class="text-center content__home__form__confirmed-p">@lang('global.complet-registr-page-txt-7')</p>
                <div class="pay_btns-div d-flex justify-content-center">
                    <a href="#!" class="waves-effect waves-light btn-large click"><img src="{{asset('plugins_site/images/click.png')}}"></a>
                    <a href="#!" class="waves-effect waves-light btn-large payme">
                        <img src="{{asset('plugins_site/images/payme.png')}}">
                    </a>
                </div>
            </div>
            <p class="content__home__form__confirmed-p pt-4"><b>@lang('global.complet-registr-page-txt-8')</b></p>
            <p class="content__home__form__confirmed-p">
                @lang('global.complet-registr-page-txt-9')
            </p>
        </div>
    </div>
</section>
@endsection
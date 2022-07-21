@extends('layouts.main')

@section('content')
<section class="content__home paddingClass-50">
    <div class="container">
        <div class="content__home__header d-flex justify-content-between align-items-center">
            <h5 class="content__home__header_h5">
                @lang('global.registration-receipt-page-title')
            </h5>
            <div class="content__home__header-btns d-flex justify-content-between align-items-center mt-lg-0 mt-3">
                <a href="{{route('siteRegistrationEdit')}}" class="appl blue" style="margin: 0 12px 0 auto;">
                <i class="fas fa-pen"></i>
                @lang('global.registration-receipt-page-btn-edit')
                </a>
                <a href="{{route('siteCompleteRegistration')}}" class="appl">
                <img src="{{asset('plugins_site/images/check_light.png')}}">
                @lang('global.registration-receipt-page-btn-submit')
                </a>
            </div>
        </div>
        <div class="content__home__form__confirm mt-4">
            @foreach($registration as $item)
                <div class="content__home__form__confirm-item">
                    <div class="row flex-lg-row flex-column-reverse">
                        <div class="col-lg-8">
                            <h4>@lang('global.registration-receipt-page-txt-title')</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>@lang('global.registration-receipt-page-txt-1') </td>
                                        <td>{{ $item->first_name.' '.$item->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('global.registration-page-gender')</td>
                                        <td>
                                            @if($locale == "ru")
                                                {{ $item->gender == 'men' ? 'Мужской' : 'Женщина'}}
                                            @else
                                                {{ $item->gender == 'men' ? 'Erkak' : 'Ayol'}}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>@lang('global.registration-page-birthdate')</td>
                                        <td>{{ date('d-m-Y', strtotime($item->birthdate))}}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('global.registration-receipt-page-txt-birth-country') </td>
                                        <td>{{ $item->country->{'name_' . $locale}." ".$item->region_name->{'name_' . $locale}." ".$item->district_name->{'name_' . $locale} }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>@lang('global.registration-page_numm-pass')</td>
                                        <td>{{ $item->passport_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('global.registration-receipt-page-txt-residence-place')</td>
                                        <td>{{ $item->full_address }}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('global.registration-receipt-page-txt-phone-num')</td>
                                        <td>{{ "+998".$item->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('global.registration-receipt-page-txt-email')</td>
                                        <td>{{ $item->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('global.registration-receipt-page-txt-edu-lev')</td>
                                        <td>{{ $item->education_name->{'name_' . $locale} }}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('global.registration-receipt-page-txt-family-st')</td>
                                        <td>
                                            @if($item->family_status == "Married")
                                                @if($locale == "ru")
                                                    Женат / Замужем
                                                @else
                                                    Uylangan / turmushga chiqgan
                                                @endif
                                            @elseif($item->family_status == "Unmarried")
                                                @if($locale == "ru")
                                                    Холост / Не замужем
                                                @else
                                                    Uylanmagan / turmushga chiqmagan
                                                @endif
                                            @elseif($item->family_status == "Divorced")
                                                @if($locale == "ru")
                                                    Разведен
                                                @else
                                                    Ajrashgan / ajrashuvda
                                                @endif
                                            @else
                                                @if($locale == "ru")
                                                    Вдовец/ва
                                                @else
                                                    Beva / yolg'iz
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-4">
                            <div class="content__home__form__confirm-item-img mb-lg-0 mb-3">
                                <img src="{{asset('images/'.$item->user_image)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if(isset($familyMembers))
            @foreach($familyMembers as $item)
                @if($item->is_child == "0")
                    <div class="content__home__form__confirm mt-4">
                        <div class="content__home__form__confirm-item">
                            <div class="row flex-lg-row flex-column-reverse">
                                <div class="col-lg-8">
                                    <h4>@lang('global.registration-receipt-page-spouse-inform')</h4>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>@lang('global.registration-receipt-page-txt-1')</td>
                                                <td>{{ $item->first_name.' '.$item->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('global.registration-page-gender')</td>
                                                <td>
                                                    @if($locale == "ru")
                                                        {{ $item->gender == 'men' ? 'Мужской' : 'Женщина'}}
                                                    @else
                                                        {{ $item->gender == 'men' ? 'Erkak' : 'Ayol'}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>@lang('global.registration-page-birthdate')</td>
                                                <td>{{ date('d-m-Y', strtotime($item->birthdate))}}</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('global.registration-receipt-page-txt-residence-place')</td>
                                                <td>{{ $item->family_country_name->{'name_' . $locale}." ".$item->family_region_name->{'name_' . $locale}." ".$item->family_district_name->{'name_' . $locale} }}</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('global.registration-page-form-title-4')</td>
                                                <td>{{ $item->education_name->{'name_' . $locale} }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-4">
                                    <div class="content__home__form__confirm-item-img mb-lg-0 mb-3">
                                        <div class="content__home__form__confirm-item-img">
                                            <img src="{{asset('images/'.$item->user_image)}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if($item->is_child == "1")
                    <div class="content__home__form__confirm mt-4">
                        <div class="content__home__form__confirm-item">
                            <div class="row flex-lg-row flex-column-reverse">
                                <div class="col-lg-8">
                                    <h4>@lang('global.registration-receipt-page-child-inform')</h4>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>@lang('global.registration-receipt-page-txt-1')</td>
                                                <td>{{ $item->first_name.' '.$item->last_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('global.registration-page-gender')</td>
                                                <td>
                                                    @if($locale == "ru")
                                                        {{ $item->gender == 'men' ? 'Мужской' : 'Женщина'}}
                                                    @else
                                                        {{ $item->gender == 'men' ? 'Erkak' : 'Ayol'}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>@lang('global.registration-page-birthdate')</td>
                                                <td>{{ date('d-m-Y', strtotime($item->birthdate))}}</td>
                                            </tr>
                                            <tr>
                                                <td>@lang('global.registration-receipt-page-txt-residence-place')</td>
                                                <td>{{ $item->family_country_name->{'name_' . $locale}." ".$item->family_region_name->{'name_' . $locale}." ".$item->family_district_name->{'name_' . $locale} }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-4">
                                    <div class="content__home__form__confirm-item-img mb-lg-0 mb-3">
                                        <div class="content__home__form__confirm-item-img">
                                            <img src="{{asset('images/'.$item->user_image)}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</section>
@endsection
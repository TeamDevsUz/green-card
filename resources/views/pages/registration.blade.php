@extends('layouts.main')

@section('content')
    <main class="header-registration">
        <div class="container">
            <div class="header-registration-box">
                <div class="form-header">
                    <div class="row  justify-content-center align-items-center">
                        <div class="col-lg-7 co-12">
                            <div class="form-header-content d-flex align-items-center flex-lg-row flex-column">
                                <figure class="form-header-content-figure">
                                    <img class="img-fluid" src="../../plugins_site/images/use-gerb.png">
                                </figure>
                                <div class="form-header-content-txt text-lg-left text-center">
                                    <h1 class="mb-0 form-header-content-txt-h1">{{$days[0]->{'name_' . $locale}  }}</h1>
                                    <p class="mb-0">@lang('global.registration-page-header-subtitle')</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 co-12">
                            <div class="form-header-countdown mt-lg-0 mt-4">
                                <div class="timer d-flex align-items-center justify-lg-content-end justify-content-center">
                                    <div  class="timer__clock d-flex justify-content-center align-items-center" title="@lang('global.registration-page-clock-day')">
                                        <span id="days">90</span>
                                    </div>

                                    <div id="razd">:</div>

                                    <div  class="timer__clock d-flex justify-content-center align-items-center" title="@lang('global.registration-page-clock-hour')">
                                        <span id="hours">90</span>
                                    </div>

                                    <div id="razd">:</div>

                                    <div  class="timer__clock d-flex justify-content-center align-items-center" title="@lang('global.registration-page-clock-min')">
                                        <span id="minutes">90</span>
                                    </div>

                                    <div id="razd">:</div>

                                    <div  class="timer__clock d-flex justify-content-center align-items-center" title="@lang('global.registration-page-clock-sec')">
                                        <span id="seconds">90</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-holder mt-4">
                    <form name="greencard-form" id="greencard-form" action="{{ route('siteRegistrationForm') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                        <div class="form-holder-box">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-holder-box-form">
                                        <input name="family_active" id="family_active" type="hidden" value="0">
                                        <div class="block-header">@lang('global.registration-page-form-title-1')</div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-item">
                                                    <div class="form-group">
                                                        <label>@lang('global.registration-page-last_name')</label>
                                                        <input type="text" class="form-control rounded" name="last_name" id="last_name" placeholder="Ahmedov">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-item">
                                                    <div class="form-group">
                                                        <label>@lang('global.registration-page-first_name')</label>
                                                        <input type="text" class="form-control rounded" name="first_name" id="first_name" placeholder="Abbos">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-item">
                                                    <div class="form-group content__home__form">
                                                        <label for="exampleInputEmail1">@lang('global.registration-page-gender')</label>
                                                        <div class="gender d-flex">
                                                            <p>
                                                                <label>
                                                                <input name="gender" value="men" type="radio">
                                                                <span><img src="{{asset('plugins_site/images/men.png')}}"> @lang('global.registration-page-gender-men')</span>
                                                                </label>
                                                            </p>
                                                            <p>
                                                                <label>
                                                                <input name="gender" value="women" type="radio">
                                                                <span><img src="{{asset('plugins_site/images/women.png')}}"> @lang('global.registration-page-gender-women')</span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="validationCustom02">@lang('global.registration-page-birthdate')</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <input placeholder="DD-MM-YYYY" id="birthdate" name="birthdate" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" required>
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>@lang('global.registration-page-birthdate-country')</label>
                                                    <select onchange="getRegion('{{$regions}}', '{{$districts}}', 1, '{{$locale}}')"  id="country_id_1" name="country_id" class="form-control select2 js-example-placeholder-single"
                                                        style="width: 100%;" value="">
                                                        <option></option>
                                                        @foreach ($countries as $item)
                                                            <option value="{{$item->id}}" class="text-uppercase">{{$item->{'name_' . $locale}  }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>@lang('global.registration-page-birthdate-region')</label>
                                                    <select onchange="getDistricts('{{$districts}}',1, '{{$locale}}')" id="region_id_1" name="region_id" class="form-control select2 js-example-placeholder-region dynamic" style="width: 100%;" value="">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>@lang('global.registration-page-birthdate-district')</label>
                                                    <select id="district_id_1" name="district_id" class="form-control select2 js-example-placeholder-district dynamic"
                                                        style="width: 100%;" value="">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="block-header">@lang('global.registration-page-form-title-2')</div>
                                        <div class="subheader">@lang('global.registration-page-form-subtitle-2')</div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">@lang('global.registration-page_numm-pass')</label>
                                                    <input name="passport_number" id="passport_number" type="text" class="form-control text-uppercase" value="" placeholder="AA1234567">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">@lang('global.registration-page-pass-date')</label>
                                                    <div class="input-group date pasportExpiryDate" id="reservationdatethird" data-target-input="nearest">
                                                        <input placeholder="DD-MM-YYYY" type="text" name="expired_date" id="expired_date" class="form-control datetimepicker-input pptExpiryDate" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask inputmode="numeric" data-target="#reservationdatethird" value readonly required>
                                                        <div class="input-group-append" data-target="#reservationdatethird" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">@lang('global.registration-page-pass-addrs')</label>
                                                    <input name="passport_given_address" id="passport_given_address" type="text" class="form-control text-uppercase" value="" placeholder="TOSHKENT SHAHAR ..." onpaste="return false;" oncopy="return false" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="block-header">@lang('global.registration-page-form-title-3')</div>
                                        <div class="subheader">@lang('global.registration-page-form-subtitle-3')</div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">@lang('global.registration-page-full_addr')</label>
                                                    <input name="full_address" id="full_address" type="text" class="form-control text-uppercase" value="" placeholder="TOSHKENT SHAHAR SERGELI-4 TUMANI 27-DOM 25-XONADON">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="subheader">@lang('global.registration-page-form-subtitle-4')</div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">@lang('global.registration-page-phone')</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text" name="code" id="code">+998</span>
                                                        </div>
                                                        <input type="text" name="phone" id="phone" class="form-control" data-inputmask='"mask": "(99) 999-99-99"' data-mask>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">@lang('global.registration-page-email')</label>         
                                                    <input name="email" id="email" type="text" class="form-control" value="" placeholder="test@gmail.com">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="block-header">@lang('global.registration-page-form-title-4')</div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>@lang('global.registration-page-edu-level')</label>
                                                    <select id="education_level" name="education_level" class="form-control select2 education-level"
                                                        style="width: 100%;" value="">
                                                        <option></option>
                                                        @foreach ($education as $item)
                                                            <option value="{{$item->id}}">{{$item->{'name_' . $locale}  }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="block-header">@lang('global.registration-page-form-title-5')</div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>@lang('global.registration-page-family-status')</label>
                                                    <select id="family_status"  name="family_status" onchange="myFunction()" class="form-control select2 family-status" style="width: 100%;">
                                                        <option></option>
                                                        <option value="Unmarried">@lang('global.registration-page-family-unmarried')</option>
                                                        <option value="Married">@lang('global.registration-page-family-married')</option>
                                                        <option value="Divorced">@lang('global.registration-page-family-divorced')</option>
                                                        <option value="Widowed">@lang('global.registration-page-family-widowed')</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <div class="form-group" id="family_inform_div" style="display: none;">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">@lang('global.registration-page-family-spouse')</label>
                                                    <div class="input-relative position-relative">
                                                        <input  id="family_inform" type="text" class="form-control text-uppercase" value="" disabled>
                                                        <a data-toggle="modal" data-target="#exampleModalCenter" id="familyEdit" class="iconButton">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a id="familyDelete" class="iconButton">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="child_box">
                                                    <div class="row flex-column">
                                                        <div class="col-lg-7">
                                                            <div class="form-group childAddBox" id="child_inform_input">
                                                                <label for="exampleInputRounded0" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">@lang('global.registration-page-family-child')</label>
                                                                <div class="input-relative position-relative">
                                                                    <input  id="child_inform" type="text" class="form-control text-uppercase" value="" placeholder="@lang('global.registration-page-family-child-add')" disabled>
                                                                    <a data-toggle="modal" data-target="#exampleModalCenterChild_3" id="childAdd" class="iconButton">
                                                                        <i class="fas fa-plus"></i>
                                                                    </a>
                                                                    <input id="currentNumber" type="hidden" value="3">
                                                                    <input name="child_active" id="child_active" type="hidden" value="1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7" id="childDIV">
                                                        </div>
                                                    </div>
                                                    <div class="child-modal" id="item_table">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-holder-box-form-right">
                                        <div class="block-header">@lang('global.registration-page-photo-requirements-title')</div>
                                        <div class="avatar__image">
                                            <img id="image" src="{{asset('plugins_site/images/photo.png')}}" alt="">
                                        </div>
                                        <input type="file" onchange="previewFile()" required=""  id="primary__avatar"  class="d-none" name="user_image" accept="image/png, image/jpeg, image/pjpeg">
                                        <label  class="btn avatar__button" for="primary__avatar">
                                            <img src="{{asset('plugins_site/images/upload.png')}}">
                                            @lang('global.registration-page-upload-photo')
                                        </label>
                                        <div class="content-txt">
                                            <p class="content-txt-info-title">
                                                <b style="color: #ef0000;">@lang('global.registration-page-photo-requirements-rules-title') <br> @lang('global.registration-page-photo-requirements-rules-txt')</b>
                                            </p>
                                            <p class="content-txt-info">@lang('global.registration-page-photo-requirements-rules-list1')<br>
                                            @lang('global.registration-page-photo-requirements-rules-list2')<br>
                                            @lang('global.registration-page-photo-requirements-rules-list3')<br>
                                            @lang('global.registration-page-photo-requirements-rules-list4')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="text-uppercase submit_btn">@lang('global.registration-page-submit')</button>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- ///////////////////// MODAL BOX MARRIED /////////////////////////////// -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">@lang('global.registration-page-family-spouse-title')</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <!-- Familiyangiz -->
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-item">
                                                    <div class="form-group">
                                                        <label>@lang('global.registration-page-last_name')</label>
                                                        <input type="text" class="form-control form-control-secondry rounded" name="last_name_secondry" id="last_name_secondry">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Familiyangiz -->
                                            
                                            <!-- Ismingiz -->
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-item">
                                                    <div class="form-group">
                                                        <label>@lang('global.registration-page-first_name')</label>
                                                        <input type="text" class="form-control form-control-secondry rounded" name="first_name_secondry" id="first_name_secondry">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ismingiz -->
                                            
                                            <!-- Jinsingiz -->
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-item">
                                                    <div class="form-group content__home__form">
                                                        <label for="exampleInputEmail1">@lang('global.registration-page-gender')</label>
                                                        <div class="gender d-flex">
                                                            <p>
                                                                <label>
                                                                <input name="gender_secondry" value="men" type="radio" id="gender">
                                                                <span><img src="{{asset('plugins_site/images/men.png')}}"> @lang('global.registration-page-gender-men')</span>
                                                                </label>
                                                            </p>
                                                            <p>
                                                                <label>
                                                                <input name="gender_secondry" value="women" type="radio" id="gender">
                                                                <span><img src="{{asset('plugins_site/images/women.png')}}"> @lang('global.registration-page-gender-women')</span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Jinsingiz -->
                                            
                                            <!-- TUG`ILGAN KUNINGIZ -->
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="validationCustom02">@lang('global.registration-page-birthdate')</label>
                                                    <div class="input-group date" id="reservationdateModal" data-target-input="nearest">
                                                        <input placeholder="DD-MM-YYYY" id="birthdate_secondry" name="birthdate_secondry" type="text" class="form-control form-control-secondry datetimepicker-input" data-target="#reservationdateModal">
                                                        <div class="input-group-append" data-target="#reservationdateModal" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- TUG`ILGAN KUNINGIZ -->
                                            
                                            <!-- TUG'ILGAN DAVLATINGIZ -->
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>@lang('global.registration-page-birthdate-country')</label>
                                                    <select onchange="getRegion('{{$regions}}','{{$districts}}',2, '{{$locale}}')"  id="country_id_2" name="country_id_secondry" class="form-control  select2 js-example-placeholder-single"
                                                        style="width: 100%;" value="">
                                                        <option></option>
                                                        @foreach ($countries as $item)
                                                            <option value="{{$item->id}}" class="text-uppercase">{{$item->{'name_' . $locale} }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- TUG'ILGAN DAVLATINGIZ -->
                                            
                                            <!-- TUG'ILGAN VILOYATINGIZ -->
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>@lang('global.registration-page-birthdate-region')</label>
                                                    <select onchange="getDistricts('{{$districts}}',2, '{{$locale}}')" id="region_id_2" name="region_id_secondry" class="form-control select2 js-example-placeholder-region dynamic" style="width: 100%;" value="">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- TUG'ILGAN VILOYATINGIZ -->
                                            
                                            <!-- TUG'ILGAN TUMANINGIZ -->
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>@lang('global.registration-page-birthdate-district')</label>
                                                    <select id="district_id_2" name="district_id_secondry" class="form-control select2 js-example-placeholder-district dynamic"
                                                        style="width: 100%;" value="">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- TUG'ILGAN TUMANINGIZ -->
                                            
                                            <!-- RASM -->
                                            <div class="col-lg-4 col-md-6">
                                                <div class="box-img">
                                                    <div class="avatar__image">
                                                        <img id="image_secondry" src="{{asset('plugins_site/images/photo.png')}}" alt="">
                                                    </div>
                                                    <input type="file" id="primary__avatare_secondry"  class="d-none" name="user_image_secondry">
                                                    <label  class="btn avatar__button" for="primary__avatare_secondry">
                                                        <img src="{{asset('plugins_site/images/upload.png')}}">
                                                        @lang('global.registration-page-upload-photo')
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- RASM -->
                                            
                                            <!-- TA’LIM DARAJANGIZ -->
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label>@lang('global.registration-page-form-title-4')</label>
                                                    <select id="education_level_secondry" name="education_level_secondry" class="form-control select2 education-level"
                                                        style="width: 100%;" value="">
                                                        <option></option>
                                                        @foreach ($education as $item)
                                                            <option value="{{$item->id}}">{{$item->{'name_' . $locale} }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- TA’LIM DARAJANGIZ -->
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="closeModelSecond" class="btn btn-secondary" data-dismiss="modal">@lang('global.registration-page-modal-btn-close')</button>
                                        <button type="button" onclick="submitForm()" id="submit" class="btn btn-primary">@lang('global.registration-page-modal-btn-add')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ///////////////////// MODAL BOX MARRIED /////////////////////////////// -->
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        function getRegion(regions, districts, id, lang) {
            let countryId = document.getElementById('country_id_' + id).value;
            
            let regionId = document.getElementById('region_id_' + id).value;
            
            regions =  JSON.parse(regions);
            districts =  JSON.parse(districts);
            //console.log(regions);
            regions = regions.filter(region => region.country_id == countryId);
            
            if(regions.length) districts = districts.filter(district => district.region_id == regions[0].id)
            
            let text = '';
            let districtsText = '';
            for (let i = 0; i < regions.length; i++) {
                text += `<option value=${regions[i].id}>${regions[i]['name_' + lang]}</option>` 
            }
            for (let i = 0; i < districts.length; i++) {
                districtsText += `<option value=${districts[i].id}>${districts[i]['name_' + lang]}</option>` 
            }
            
            //console.log(test);
            
            if(regions.length)
            {
                document.getElementById('region_id_' + id).innerHTML = text; 
                document.getElementById('district_id_' + id).innerHTML = districtsText; 
            }
            else 
            {
                document.getElementById('region_id_' + id).innerHTML = ''; 
                document.getElementById('district_id_' + id).innerHTML = ''; 
            }


            //regionId.append(text);
            //$('#region_id').append(text)
            // console.log(regionId);
            //console.log(regions);
            
        }
        
        function getDistricts(districts, id, lang) {
            
            let regionId = document.getElementById('region_id_' + id).value;
            let districtId = document.getElementById('district_id_' + id);
            $('#district_id_' + id).remove(1);
                
            districts = JSON.parse(districts);
            console.log('ok');
            districts = districts.filter(district => district.region_id == regionId)
            
            let text = '';
            for (let i = 0; i < districts.length; i++) {
                text += `<option value=${districts[i].id}>${districts[i]['name_' + lang]}</option>` 
            }
            if(districts)
            {
                document.getElementById('district_id_' + id).innerHTML = text; 
            }
            
            
        }
        
        function submitForm() {
            var familyActive = document.getElementById("family_active").value;
            
            let l_name = $("#last_name_secondry").val();
            let f_name = $("#first_name_secondry").val();
            let birthdate = $("#birthdate_secondry").val();
            let country_id = $("#country_id_secondry").val();
            let region_id = $("#region_id_secondry").val();
            let district_id = $("#district_id_secondry").val();
            let user_image = $("#primary__avatare_secondry").val();
            
            // // let gender = $("#gender").val();
            // let controller = $(".form-control-secondry");
            console.log(user_image);
            if (l_name == "" || f_name == "" || birthdate == "" || country_id == "" || region_id == "" || district_id == "" || user_image == "") 
            {
                alert('Iltimos barcha polyalarni to`ldiring va rasmingizni yuklang!');
                return 0;
            }
            else
            {
                $('#exampleModalCenter').modal('hide');
                $("#family_inform_div").attr("style", "display:block");
            }
            
            if(familyActive == 0) document.getElementById('family_active').value = 1;
            $("#family_inform").attr("placeholder", `${f_name} ${l_name}`);
            
        }
        
        function submitChildForm(id) {
            let childActive = document.getElementById('child_active').value;
            let l_name      = document.getElementById('last_name_'+ id).value;
            let f_name      = document.getElementById('first_name_'+ id).value;
            let birthdate   = document.getElementById('birthdate_id_'+ id).value;
            let country     = document.getElementById('country_id_'+ id).value;
            let region      = document.getElementById('region_id_'+ id).value;
            let district    = document.getElementById('district_id_'+ id).value;
            
            if (l_name == "" || f_name == "" || birthdate == "" || country == "" || region == "" || district == "") 
            {
                alert('Iltimos barcha polyalarni to`ldiring va rasmingizni yuklang!');
                //return 0;
            }
            else
            {
                $(`#exampleModalCenterChild_${id}`).modal('hide');
                if(childActive == 1){
                    var html = '';
                    html += `
                    <div class="form-group" id="child_inform_div">
                        <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">Farzandingiz haqida ma'lumot</label>
                        <div class="input-relative position-relative">
                            <input  id="child_inform_disable_${id}" type="text" class="form-control text-uppercase" value="" disabled>
                                <a data-toggle="modal" onclick="disableAddChildField()" data-target="#exampleModalCenterChild_${id}" id="childEdit" class="iconButton">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a id="childDelete" class="iconButton">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </div>
                    `;
                    
                    $("#childDIV").append(html);
                    let currentNumber = document.getElementById('currentNumber').value;
                    let newId = currentNumber - 1;
                    document.getElementById('childAdd').setAttribute('data-target', `#exampleModalCenterChild_`+ newId);
                    
                    $("#child_inform_disable_" + id).attr("placeholder", `${l_name} ${f_name}`);
                }
            }
            
            //return html;
            console.log(currentNumber);
        }
        
        function myFunction() {
            var familyStatus = document.getElementById("family_status").value;
            if(familyStatus == "Married") $('#exampleModalCenter').modal('show');
            else
            {
                $('#exampleModalCenter').modal('hide');
                $("#family_inform_div").attr("style", "display:none");
                document.getElementById('family_active').value = 0;
            }
        }
        
        function disableAddChildField() { 
            document.getElementById('child_active').value = 0;
        }
        
        
        function previewFile() {
            var preview = document.querySelector('#image');
            var file    = document.querySelector('#primary__avatar').files[0];
            var reader  = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
        
        function previewChildFile(id) {
            var preview = document.getElementById('image_child_' + id);
            var file    = document.getElementById('child_avatare_' + id).files[0];
            var reader  = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }
        
        
        function childGender(id, gender) {
            var childMale = document.getElementById("child_male_" + id);
            var childFemale = document.getElementById("child_female_" + id);
            var childInput = document.getElementById("client_gender_" + id).value;
            
            if(gender == "male")
            {
                childMale.classList.add('gender_active');
                childFemale.classList.remove('gender_active');
                document.getElementById("client_gender_" + id).value = 'men';
            }
            else
            {
                childFemale.classList.add('gender_active');
                childMale.classList.remove('gender_active');
                document.getElementById("client_gender_" + id).value = "women";
            }
        }
        
        var disabledDate = [];
        disabledDate.push(<?echo $disabledDates?>);
        // let finalString = dummyString.replace(/["]+/g, '')
        deadline = disabledDate[0];
        //const time= '2022-08-11';
        // Clock
        //console.log(deadline);
        //console.log(time);
        //const deadline= '2022-08-11';
        function getTime(endtime) {
            const total = Date.parse(endtime) - Date.parse(new Date()),
                days = Math.floor((total / (1000 * 60 * 60 * 24))),
                seconds = Math.floor((total / 1000) % 60),
                minutes = Math.floor((total / 1000 / 60) % 60),
                hours = Math.floor((total / (1000 *60 * 60)) % 24);

            return {
                'total': total,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds,
            };
        }

        function getZero(num) {
            if(num >= 0 && num < 10){
                return "0" + num;
            }else{
                return num;
            }
        }

        function setClock(selector, endtime) {
            const timer = document.querySelector(selector),
                days = timer.querySelector("#days"),
                hours = timer.querySelector("#hours"),
                minutes = timer.querySelector("#minutes"),
                seconds = timer.querySelector("#seconds");
            timeInterval = setInterval(upDateClock, 1000);

            upDateClock();

            function upDateClock() {
                const time = getTime(endtime);
                days.innerHTML = getZero(time.days);
                hours.innerHTML = getZero(time.hours);
                minutes.innerHTML = getZero(time.minutes);
                seconds.innerHTML = getZero(time.seconds);
                if(time.total <= 0){
                    clearInterval(timeInterval);
                }
            }
        }
        setClock(".timer", deadline);
        
        
        $(document).ready(function(){
            
            $("#closeModelSecond").click(function () {
                var familyActive = document.getElementById("family_active").value;
                //console.log(familyActive);
                if(familyActive == 0) $('#family_status').val('Unmarried').trigger('change');
            });
            
            $("#familyDelete").click(function () {
                var familyActive = document.getElementById("family_active").value;
                let l_name = $("#last_name_secondry").val();
                
                if(familyActive == 1) 
                {
                    $('#family_status').val('Unmarried').trigger('change');
                    $("#family_inform_div").attr("style", "display:none");
                }
            });
            // ///////////////////////////////////////////////////////

            
            var count = 0;
            function add_input_field(count) {
                let currentNumber = document.getElementById('currentNumber').value;
                document.getElementById('child_active').value = 1;
                var html = '';
                
                html += `
                <div class="modal fade" id="exampleModalCenterChild_`+ currentNumber +`" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">@lang('global.registration-page-child-modal-title')</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-item">
                                            <div class="form-group">
                                                <label>@lang('global.registration-page-last_name')</label>
                                                <input type="text" class="form-control form-control-secondry rounded" name="last_name_secondry_child[]" id="last_name_`+ currentNumber +`">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-item">
                                            <div class="form-group">
                                                <label>@lang('global.registration-page-first_name')</label>
                                                <input type="text" class="form-control form-control-secondry rounded" name="first_name_secondry_child[]" id="first_name_`+ currentNumber +`">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-item" id="left-column">
                                            <div class="form-group content__home__form">
                                                <label for="exampleInputEmail1">@lang('global.registration-page-gender')</label>
                                                
                                                <div class="gender-btns d-flex" id="left-column">
                                                    <div class="gender-btns-input button">
                                                        <span class="" id="child_male_`+ currentNumber +`" onclick="childGender(`+ currentNumber +`, 'male')" value="male">
                                                            <img src="{{asset('plugins_site/images/men.png')}}"> @lang('global.registration-page-gender-men')
                                                        </span>
                                                    </div>
                                                    
                                                    <div class="gender-btns-input button">
                                                        <span class="child_female" id="child_female_`+ currentNumber +`" onclick="childGender(`+ currentNumber +`, 'female')"  value="female">
                                                            <img src="{{asset('plugins_site/images/women.png')}}"> @lang('global.registration-page-gender-women')
                                                        </span>
                                                    </div>
                                                    
                                                    <input type="text" 
                                                    id="client_gender_`+ currentNumber +`" style="visibility: hidden" name="client_gender[]"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="validationCustom02">@lang('global.registration-page-birthdate')</label>
                                                <div class="input-group date" id="reservationdateModal" data-target-input="nearest">
                                                <input placeholder="DD-MM-YYYY" id="birthdate_id_` + currentNumber + `" name="birthdate_secondry_child[]" type="text" class="form-control form-control-secondry datetimepicker-input" data-target="#reservationdateModal">
                                                    <div class="input-group-append" data-target="#reservationdateModal" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>@lang('global.registration-page-birthdate-country')</label>
                                            <select onchange="getRegion('{{$regions}}','{{$districts}}',`+ currentNumber +`, '{{$locale}}')"  id="country_id_`+ currentNumber +`" name="country_id_secondry_child[]" class="form-control  select2 js-example-placeholder-single"
                                            style="width: 100%;" value="">
                                                <option></option>
                                                     @foreach ($countries as $item)
                                                        <option value="{{$item->id}}" class="text-uppercase">{{$item->{'name_' . $locale} }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>@lang('global.registration-page-birthdate-region')</label>
                                            <select onchange="getDistricts('{{$districts}}', `+ currentNumber +`, '{{$locale}}')" id="region_id_`+ currentNumber +`"name="region_id_secondry_child[]" class="form-control select2 js-example-placeholder-region dynamic" style="width: 100%;" value="">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>@lang('global.registration-page-birthdate-district')</label>
                                            <select id="district_id_`+ currentNumber +`" name="district_id_secondry_child[]" class="form-control select2 js-example-placeholder-district dynamic" style="width: 100%;" value="">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="box-img">
                                            <div class="avatar__image">
                                                <img id="image_child_`+ currentNumber +`" src="{{asset('plugins_site/images/avatar-child.jpg')}}" alt="">
                                            </div>
                                            <input type="file" onchange="previewChildFile(`+ currentNumber +`)" id="child_avatare_`+ currentNumber +`"  class="d-none" name="user_image_child[]">
                                            <label  class="btn avatar__button" for="child_avatare_`+ currentNumber +`">
                                                <img src="{{asset('plugins_site/images/upload.png')}}">
                                                @lang('global.registration-page-upload-photo')
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="closeModel" class="btn btn-secondary" data-dismiss="modal">@lang('global.registration-page-modal-btn-close')</button>
                                <button type="button" onclick="submitChildForm(`+ currentNumber +`)" id="submitChild" class="btn btn-primary">@lang('global.registration-page-modal-btn-add')</button>
                            </div>
                        </div>
                    </div>
                </div>
                `;
        
                document.getElementById('currentNumber').value = currentNumber;

                return html;
            }
            
            $('#item_table').append(add_input_field(0));

            $(document).on('click', '#submitChild', function() {
                let childActive = document.getElementById('child_active').value;
                let currentNumber = document.getElementById('currentNumber').value;
                let newId = 1 * currentNumber + 1;
                document.getElementById('currentNumber').value = newId;
                
                document.getElementById('childAdd').setAttribute('data-target', `#exampleModalCenterChild_`+ newId);
                count++;
                $('#item_table').append(add_input_field(count));
            });
            // ///////////////////////////////////////////////////////
            
            // if ($("#left-column .button:first-child").hasClass("pressed"))
            //     $("input[name='client_gender']").val("male");
            // else $("input[name='client_gender']").val("female");
            
            
            // Calendars start
            $('#reservationdate').each(function() {
                $(this).datetimepicker({
                    format: 'DD-MM-YYYY',
                    maxDate: moment().endOf('y'),
                    viewMode: 'years',
                    locale: moment.locale('en', {
                        week: {
                            dow: 1
                        }
                    }),
                })
            })

            $('#reservationdateModal').each(function() {
                $(this).datetimepicker({
                    format: 'DD-MM-YYYY',
                    maxDate: moment().endOf('y'),
                    viewMode: 'years',
                    locale: moment.locale('en', {
                        week: {
                            dow: 1
                        }
                    }),
                })
            })

            $('#reservationdatethird').datetimepicker({
                format: 'DD-MM-YYYY',
                viewMode: 'years',
                locale: moment.locale('en', {
                    week: {
                        dow: 1
                    }
                }),
            })
            // Calendars start end
            
            // Placeholders start
            $(".js-example-placeholder-single").attr(
                "data-placeholder", "O'ZBEKISTON"
            );
            $(".js-example-placeholder-region").attr(
                "data-placeholder", "TOSHKENT"
            );
            $(".js-example-placeholder-district").attr(
                "data-placeholder", "BEKTEMIR"
            );
            
            $(".education-level").attr(
                "data-placeholder", "TA'LIM DARAJANGIZNI TANLANG"
            );
            
            $(".family-status").attr(
                "data-placeholder", "OILAVIY HOLATINGIZNI TANLANG"
            );
            // Placeholders start
            
            // User image start
            
            
            $("#primary__avatare_secondry").on('change',  function (e) {
                var file = e.target.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var inputData = reader.result;
                    var replaceValue = (inputData.split('.')[0])
                    var base64String = inputData.replace(replaceValue + ",","");
                    console.log(base64String);
                    $('#image_secondry').attr('src', base64String );
                }
            });
            
            $("#primary__avatare_secondry_child").on('change',  function (e) {
                var file = e.target.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var inputData = reader.result;
                    var replaceValue = (inputData.split('.')[0])
                    var base64String = inputData.replace(replaceValue + ",","");
                    console.log(base64String);
                    $('#image_secondry__child').attr('src', base64String );
                }
            });
            // User image end
        
            
        });
        
    </script>
@endsection
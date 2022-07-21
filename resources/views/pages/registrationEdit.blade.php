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
                                    <h1 class="mb-0 form-header-content-txt-h1">DV-2024 mavsumi uchun anketa to'ldirish shakli</h1>
                                    <p class="mb-0">Diqqat!  Anketani faqat lotin alifbosida to'ldiring!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 co-12">
                            <div class="form-header-countdown mt-lg-0 mt-4">
                                <div class="timer d-flex align-items-center justify-lg-content-end justify-content-center">
                                    <div  class="timer__clock d-flex justify-content-center align-items-center" title="kun">
                                        <span id="days">90</span>
                                    </div>

                                    <div id="razd">:</div>

                                    <div  class="timer__clock d-flex justify-content-center align-items-center" title="soat">
                                        <span id="hours">90</span>
                                    </div>

                                    <div id="razd">:</div>

                                    <div  class="timer__clock d-flex justify-content-center align-items-center" title="daqiqa">
                                        <span id="minutes">90</span>
                                    </div>

                                    <div id="razd">:</div>

                                    <div  class="timer__clock d-flex justify-content-center align-items-center" title="sekund">
                                        <span id="seconds">90</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-holder mt-4">
                    <form name="greencard-form" id="greencard-form" action="{{ route('siteRegistrationUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                        <div class="form-holder-box">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="form-holder-box-form">
                                        <input name="family_active" id="family_active" type="hidden" value="0">
                                        <div class="block-header">SHAXSIY MA’LUMOTLARI</div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-item">
                                                    <div class="form-group">
                                                        <label>Familiyangiz</label>
                                                        <input type="text" class="form-control rounded" name="last_name" id="last_name" placeholder="Ahmedov" value="{{ old('name',$registration->last_name) }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-item">
                                                    <div class="form-group">
                                                        <label>Ismingiz</label>
                                                        <input type="text" class="form-control rounded" name="first_name" id="first_name" placeholder="Abbos" value="{{ old('name',$registration->first_name) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-item">
                                                    <div class="form-group content__home__form">
                                                        <label for="exampleInputEmail1">Jinsingiz</label>
                                                        <div class="gender d-flex">
                                                            <p>
                                                                <label>
                                                                <input name="gender" value="men" type="radio" {{$registration->gender == "men" ? 'checked' : ''}}>
                                                                <span><img src="{{asset('plugins_site/images/men.png')}}"> Erkak</span>
                                                                </label>
                                                            </p>
                                                            <p>
                                                                <label>
                                                                <input name="gender" value="women" type="radio" {{$registration->gender == "women" ? 'checked' : ''}}>
                                                                <span><img src="{{asset('plugins_site/images/women.png')}}"> Ayol</span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="validationCustom02">TUG`ILGAN KUNINGIZ</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <input placeholder="DD-MM-YYYY" id="birthdate" name="birthdate" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" value="{{ old('name',date('d-m-Y', strtotime($registration->birthdate))) }}" required>
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>TUG'ILGAN DAVLATINGIZ</label>
                                                    <select onchange="getRegion('{{$regions}}', 1,)" id="country_id_1" name="country_id" class="form-control select2 js-example-placeholder-single"
                                                        style="width: 100%;" value="{{ old('country_id',$registration->country_id) }}">
                                                        @foreach ($countries as $country)
                                                            <option value="{{$country->id}}" {{$country->id == $registration->country->id ? 'selected' : ''}}>{{$country->name_uz}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>TUG'ILGAN VILOYATINGIZ</label>
                                                    <select id="region_id_1" name="region_id" onchange="getDistricts('{{$districts}}',1)" class="form-control select2 js-example-placeholder-single dynamic" style="width: 100%;" value="{{ old('region_id',$registration->region_id) }}">
                                                        @foreach (json_decode($regions) as $region)
                                                            <option value="{{$region->id}}" {{$region->id == $registration->region_id ? 'selected' : ''}}>{{$region->name_uz}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>TUG'ILGAN TUMANINGIZ</label>
                                                    <select   id="district_id_1" name="district_id" class="form-control select2 js-example-placeholder-single dynamic" style="width: 100%;" value="{{ old('district_id',$registration->district_id) }}">
                                                        @foreach (json_decode($districts) as $district)
                                                            @if($registration->region_id == $district->region_id)
                                                                <option value="{{$district->id}}" {{$district->id == $registration->district_id ? 'selected' : ''}}>{{$district->name_uz}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="block-header">PASPORT MA'LUMOTLARI</div>
                                        <div class="subheader">Chet elga chiqish uchun biometrik qizil pasport ma'lumotlarini kiriting!</div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">PASSPORT RAQAMINGIZ</label>
                                                    <input name="passport_number" id="passport_number" type="text" class="form-control text-uppercase" value="{{ old('passport_number',$registration->passport_number) }}" placeholder="AA1234567">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">AMAL QILISH MUDDATI</label>
                                                    <div class="input-group date pasportExpiryDate" id="reservationdatefourth" data-target-input="nearest">
                                                        <input placeholder="DD-MM-YYYY" type="text" name="expired_date" id="expired_date" class="form-control datetimepicker-input pptExpiryDate" data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask inputmode="numeric" data-target="#reservationdatefourth" value="{{ old('name',date('d-m-Y', strtotime($registration->expired_date))) }}" readonly required>
                                                        <div class="input-group-append" data-target="#reservationdatefourth" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-4 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">KIM TOMONIDAN BERILGAN?</label>
                                                    <input name="passport_given_address" id="passport_given_address" type="text" class="form-control text-uppercase" value="{{old('passport_given_address', $registration->passport_given_address)}}" placeholder="TOSHKENT SHAHAR ..." onpaste="return false;" oncopy="return false" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="block-header">ALOQA MA'LUMOTLARI</div>
                                        <div class="subheader">Hozirda yashash manzilingizni kiriting!</div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">YASHASH MANZILINGIZNI TO'LIQ KIRITING</label>
                                                    <input name="full_address" id="full_address" type="text" class="form-control text-uppercase" value="{{old('full_address', $registration->full_address)}}" placeholder="TOSHKENT SHAHAR SERGELI-4 TUMANI 27-DOM 25-XONADON">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="subheader">Uyali telefon va elektron pochtangiz</div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">TELEFON RAQAMINGIZ</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text" name="code" id="code">+998</span>
                                                        </div>
                                                        <input type="text" name="phone" id="phone" class="form-control" data-inputmask='"mask": "(99) 999-99-99"' data-mask value="{{old('phone', $registration->phone)}}">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">ELEKTRON POCHTANGIZ</label>         
                                                    <input name="email" id="email" type="text" class="form-control" value="{{old('email', $registration->email)}}" placeholder="test@gmail.com">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="block-header">TA’LIM DARAJANGIZNI TANLANG</div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>TA’LIM DARAJANGIZ</label>
                                                    <select id="education_level" name="education_level" class="form-control select2 education-level"
                                                        style="width: 100%;" value="{{old('education_level', $registration->education_level)}}">
                                                        <option></option>
                                                        @foreach ($education as $edu)
                                                            <option value="{{$edu->id}}" {{$edu->id == $registration->education_level ? 'selected' : ''}}>{{$edu->name_uz}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="block-header">OILAVIY HOLATINGIZ</div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>OILAVIY HOLATINGIZ</label>
                                                    <select id="family_status"  name="family_status" onchange="myFunction()" class="form-control select2 family-status" style="width: 100%;">
                                                        <option></option>
                                                        <option value="Unmarried" {{$registration->family_status == "Unmarried" ? 'selected' : ''}}>Uylanmagan / turmushga chiqmagan</option>
                                                        <option value="Married" {{$registration->family_status == "Married" ? 'selected' : ''}}>Uylangan / turmushga chiqgan</option>
                                                        <option value="Divorced" {{$registration->family_status == "Divorced" ? 'selected' : ''}}>Ajrashgan / ajrashuvda</option>
                                                        <option value="Widowed" {{$registration->family_status == "Widowed" ? 'selected' : ''}}>Beva / yolg'iz</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            @if(isset($wife))
                                            <div class="col-lg-6">
                                                <div class="form-group" id="family_inform_div" style="display: block;">
                                                    <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">Turmush o’rtog’ingiz haqida ma’lumot</label>
                                                    <div class="input-relative position-relative">
                                                        <input  id="family_inform" name="family_info" type="text" class="form-control text-uppercase" value="{{old('family_info', $wife->last_name.' '.$wife->first_name)}}" disabled>
                                                        <a data-toggle="modal" data-target="#exampleModalCenter_2" id="familyEdit" class="iconButton">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a id="familyDelete" class="iconButton">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                 <!-- MODAL -->
                                                <div class="modal fade" id="exampleModalCenter_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static"  aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Turmush o'rtog'ingiz haqida ma'lumot kiritish</h5>
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
                                                                                <label>Familiyangiz</label>
                                                                                <input type="text" class="form-control form-control-secondry rounded" name="last_name_secondry" id="last_name_secondry" value="{{old('last_name_secondry', $wife->last_name)}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Familiyangiz -->
                                                                    
                                                                    <!-- Ismingiz -->
                                                                    <div class="col-lg-6 col-md-6 col-12">
                                                                        <div class="form-item">
                                                                            <div class="form-group">
                                                                                <label>Ismingiz</label>
                                                                                <input type="text" class="form-control form-control-secondry rounded" name="first_name_secondry" id="first_name_secondry" value="{{old('first_name_secondry', $wife->first_name)}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Ismingiz -->
                                                                    
                                                                    <!-- Jinsingiz -->
                                                                    <div class="col-lg-6 col-md-6 col-12">
                                                                        <div class="form-item">
                                                                            <div class="form-group content__home__form">
                                                                                <label for="exampleInputEmail1">Jinsingiz</label>
                                                                                <div class="gender d-flex">
                                                                                    <p>
                                                                                        <label>
                                                                                        <input name="gender_secondry" value="men" type="radio" id="gender" {{$wife->gender == "men" ? 'checked' : ''}}>
                                                                                        <span><img src="{{asset('plugins_site/images/men.png')}}"> Erkak</span>
                                                                                        </label>
                                                                                    </p>
                                                                                    <p>
                                                                                        <label>
                                                                                        <input name="gender_secondry" value="women" type="radio" id="gender" {{$wife->gender == "women" ? 'checked' : ''}}>
                                                                                        <span><img src="{{asset('plugins_site/images/women.png')}}"> Ayol</span>
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
                                                                            <label for="validationCustom02">TUG`ILGAN KUNINGIZ</label>
                                                                            <div class="input-group date" id="reservationdateModal" data-target-input="nearest">
                                                                                <input placeholder="DD-MM-YYYY" id="birthdate_secondry" name="birthdate_secondry" type="text" class="form-control form-control-secondry datetimepicker-input" data-target="#reservationdateModal" value="{{$wife->birthdate}}">
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
                                                                            <label>TUG'ILGAN DAVLATINGIZ</label>
                                                                            <select id="country_id_2"  onchange="getRegion('{{$regions}}', 2,)" name="country_id_secondry" class="form-control  select2 js-example-placeholder-single"
                                                                                style="width: 100%;" value="{{ old('country_id_secondry',$wife->country_id) }}">
                                                                                @foreach ($countries as $country)
                                                                                    <option value="{{$country->id}}" {{$country->id == $wife->country_id ? 'selected' : ''}}>{{$country->name_uz}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- TUG'ILGAN DAVLATINGIZ -->
                                                                    
                                                                    <!-- TUG'ILGAN VILOYATINGIZ -->
                                                                    <div class="col-lg-4 col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label>TUG'ILGAN VILOYATINGIZ</label>
                                                                            <select  id="region_id_2" onchange="getDistricts('{{$districts}}',2)" name="region_id_secondry" class="form-control select2 js-example-placeholder-single dynamic" style="width: 100%;" value="{{ old('region_id_secondry',$wife->region_id) }}">
                                                                            @foreach (json_decode($regions) as $region)
                                                                                <option value="{{$region->id}}" {{$region->id == $wife->region_id ? 'selected' : ''}}>{{$region->name_uz}}</option>
                                                                            @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- TUG'ILGAN VILOYATINGIZ -->
                                                                    
                                                                    <!-- TUG'ILGAN TUMANINGIZ -->
                                                                    <div class="col-lg-4 col-md-6 col-12">
                                                                        <div class="form-group">
                                                                            <label>TUG'ILGAN TUMANINGIZ</label>
                                                                            <select id="district_id_2" name="district_id_secondry" class="form-control select2 js-example-placeholder-single dynamic"
                                                                                style="width: 100%;" value="{{ old('district_id',$wife->district_id) }}">
                                                                                @foreach (json_decode($districts) as $district)
                                                                                    @if($wife->region_id == $district->region_id)
                                                                                        <option value="{{$district->id}}" {{$district->id == $wife->district_id ? 'selected' : ''}}>{{$district->name_uz}}</option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- TUG'ILGAN TUMANINGIZ -->
                                                                    
                                                                    <!-- RASM -->
                                                                    <div class="col-lg-4 col-md-6">
                                                                        <div class="box-img">
                                                                            <div class="avatar__image">
                                                                                <img id="image_secondry" src="{{asset('images/'.$wife->user_image)}}" alt="">
                                                                            </div>
                                                                            <input type="file" id="primary__avatare_secondry"  class="d-none" name="user_image_secondry" >
                                                                            <label  class="btn avatar__button" for="primary__avatare_secondry">
                                                                                <img src="{{asset('plugins_site/images/upload.png')}}">
                                                                                FOTOSURAT YUKLASH
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <!-- RASM -->
                                                                    
                                                                    <!-- TA’LIM DARAJANGIZ -->
                                                                    <div class="col-lg-6 col-md-6">
                                                                        <div class="form-group">
                                                                            <label>TA’LIM DARAJANGIZ</label>
                                                                            <select id="education_level_secondry" name="education_level_secondry" class="form-control select2 education-level"
                                                                                style="width: 100%;" value="{{old('education_level_secondry', $wife->education_level_secondry)}}">
                                                                                @foreach($education as $edu)
                                                                                <option value="{{$edu->id}}"{{$edu->id == $wife->education_level_secondry ? 'selected' : ''}}> {{$edu->name_uz}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!-- TA’LIM DARAJANGIZ -->
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" id="closeModelSecond" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" onclick="submitForm()" id="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- MODAL -->
                                                
                                            </div>
                                            @endif
                                            
                                            
                                            
                                            @if(isset($members))
                                                @php $numberApplicants = 0; @endphp
                                                @foreach($members as $item)
                                                @php $numberApplicants += 3 @endphp
                                                    @if($item->is_child == "1")
                                                        <div class="col-12">
                                                            <div class="child_box">
                                                                <div class="row flex-column">
                                                                    <!-- <div class="col-lg-7">
                                                                        <div class="form-group childAddBox" id="child_inform_input">
                                                                            <label for="exampleInputRounded0" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">21 YOSHGA TO’LMAGAN FARZANDLAR HAQIDA MA’LUMOT KIRITING</label>
                                                                            <div class="input-relative position-relative">
                                                                                <input  id="child_inform" type="text" class="form-control text-uppercase" value="" placeholder="FARZAND QO'SHISH" disabled>
                                                                                <a data-toggle="modal" data-target="#!" id="childAdd" class="iconButton">
                                                                                    <i class="fas fa-plus"></i>
                                                                                </a>
                                                                                <input id="currentNumber" type="hidden" value="3">
                                                                                <input name="child_active" id="child_active" type="hidden" value="1">
                                                                            </div>
                                                                        </div>
                                                                    </div> -->
                                                                    <div class="col-lg-7" id="childDIV">
                                                                    <div class="form-group" id="child_inform_div">
                                                                        <label for="exampleInputRounded0" class="" style="font-size: 14px; color: #00214e!important; margin-bottom: 0 !important;font-weight: 700;">Farzandingiz haqida ma'lumot</label>
                                                                        <div class="input-relative position-relative">
                                                                            <input  id="child_inform_disable_" type="text" name="child_info" class="form-control text-uppercase" value="{{old('child_info', $item->last_name.' '.$item->first_name)}}" disabled>
                                                                                <a data-toggle="modal" onclick="disableAddChildField()" data-target="#exampleModalCenterChild_{{$numberApplicants += 0}}" id="childEdit" class="iconButton">
                                                                                    <i class="fas fa-pen"></i>
                                                                                </a>
                                                                                <a id="childDelete" class="iconButton">
                                                                                    <i class="fas fa-times"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="child-modal" id="item_table">
                                                                    <div class="modal fade" id="exampleModalCenterChild_{{$numberApplicants += 0}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Farzandingiz haqida ma'lumot kiritish Soni </h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6 col-md-6 col-12">
                                                                                            <div class="form-item">
                                                                                                <div class="form-group">
                                                                                                    <label>Familiya</label>
                                                                                                    <input type="text" class="form-control form-control-secondry rounded" name="last_name_secondry_child[]" id="last_name_" value="{{old('last_name_secondry_child',$item->last_name)}}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-12">
                                                                                            <div class="form-item">
                                                                                                <div class="form-group">
                                                                                                    <label>Ismi</label>
                                                                                                    <input type="text" class="form-control form-control-secondry rounded" name="first_name_secondry_child[]" id="first_name_"value="{{old('first_name_secondry_child',$item->first_name)}}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-12">
                                                                                            <div class="form-item" id="left-column">
                                                                                                <div class="form-group content__home__form">
                                                                                                    <label for="exampleInputEmail1">Jinsi</label>
                                                                                                    
                                                                                                    <div class="gender-btns d-flex" id="left-column">
                                                                                                        <div class="gender-btns-input button">
                                                                                                            <span class="{{$item->gender == "men" ? 'gender_active' : ''}}" id="child_male_" onclick="childGender('male')" value="male">
                                                                                                                <img src="{{asset('plugins_site/images/men.png')}}"> Erkak
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        
                                                                                                        <div class="gender-btns-input button">
                                                                                                            <span class="child_female {{$item->gender == "women" ? 'gender_active' : ''}}" id="child_female_" onclick="childGender('female')"  value="female">
                                                                                                                <img src="{{asset('plugins_site/images/women.png')}}"> Ayol
                                                                                                            </span>
                                                                                                        </div>
                                                                                                        
                                                                                                        <input type="text" 
                                                                                                        id="client_gender_" style="visibility: hidden" name="client_gender[]"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-6 col-md-6 col-12">
                                                                                            <div class="form-group">
                                                                                                <label for="validationCustom02">TUG'ILGAN KUNI</label>
                                                                                                    <div class="input-group date" id="reservationdateModal" data-target-input="nearest">
                                                                                                    <input placeholder="DD-MM-YYYY" id="birthdate_id_" name="birthdate_secondry_child[]" type="text" class="form-control form-control-secondry datetimepicker-input" data-target="#reservationdateModal" value="{{old('', date('d-m-Y', strtotime($item->birthdate)))}}">
                                                                                                        <div class="input-group-append" data-target="#reservationdateModal" data-toggle="datetimepicker">
                                                                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4">
                                                                                            <div class="form-group">
                                                                                                <label>TUG'ILGAN DAVLATI</label>
                                                                                                <select onchange="getRegion('{{$regions}}','{{$numberApplicants += 0}}')"  id="country_id_{{$numberApplicants += 0}}" name="country_id_secondry_child[]" class="form-control  select2 js-example-placeholder-single"
                                                                                                style="width: 100%;"  value="{{ old('country_id_secondry_child',$item->country_id) }}">
                                                                                                    <option></option>
                                                                                                    @foreach ($countries as $country)
                                                                                                        <option value="{{$country->id}}" {{$country->id == $item->country_id ? 'selected' : ''}}>{{$country->name_uz}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-6 col-12">
                                                                                            <div class="form-group">
                                                                                                <label>TUG'ILGAN VILOYATINGIZ</label>
                                                                                                <select onchange="getDistricts('{{$districts}}', '{{$numberApplicants += 0}}')" id="region_id_{{$numberApplicants += 0}}"name="region_id_secondry_child[]" class="form-control select2 js-example-placeholder-single dynamic" style="width: 100%;" value="{{ old('region_id_secondry_child',$item->region_id) }}">
                                                                                                    @foreach (json_decode($regions) as $region)
                                                                                                        <option value="{{$region->id}}" {{$region->id == $item->region_id ? 'selected' : ''}}>{{$region->name_uz}}</option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-6 col-12">
                                                                                            <div class="form-group">
                                                                                                <label>TUG'ILGAN TUMANINGIZ</label>
                                                                                                <select id="district_id_{{$numberApplicants += 0}}" name="district_id_secondry_child[]" class="form-control select2 js-example-placeholder-single dynamic" style="width: 100%;" value="{{ old('district_id_secondry_child',$item->district_id) }}">
                                                                                                @foreach (json_decode($districts) as $district)
                                                                                                    @if($item->region_id == $district->region_id)
                                                                                                        <option value="{{$district->id}}" {{$district->id == $item->district_id ? 'selected' : ''}}>{{$district->name_uz}}</option>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-6">
                                                                                            <div class="box-img">
                                                                                                <div class="avatar__image">
                                                                                                    <img id="image_child_{{$numberApplicants += 0}}" src="{{asset('images/'.$item->user_image)}}" alt="">
                                                                                                </div>
                                                                                                <input type="file" onchange="previewChildFile('{{$numberApplicants += 0}}')" id="child_avatare_{{$numberApplicants += 0}}"  class="d-none" name="user_image_child[]">
                                                                                                <label  class="btn avatar__button" for="child_avatare_{{$numberApplicants += 0}}">
                                                                                                    <img src="{{asset('plugins_site/images/upload.png')}}">
                                                                                                    FOTOSURAT YUKLASH
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" id="closeModel" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" onclick="submitChildForm(`+ currentNumber +`)" id="submitChild" class="btn btn-primary">Save changes</button>
                                                                                </div>
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
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-holder-box-form-right">
                                        <div class="block-header">RASM (5X5)</div>
                                        <div class="avatar__image">
                                            <img id="image" src="{{asset('images/'.$registration->user_image)}}" alt="">
                                        </div>
                                        <input type="file" onchange="previewFile()"   id="primary__avatar"  class="d-none" name="user_image" accept="image/png, image/jpeg, image/pjpeg" value="{{old('user_image', $registration->user_image)}}">
                                        <label  class="btn avatar__button" for="primary__avatar">
                                            <img src="{{asset('plugins_site/images/upload.png')}}">
                                            FOTOSURAT YUKLASH
                                        </label>
                                        <div class="content-txt">
                                            <p class="content-txt-info-title">
                                                <b style="color: #ef0000;">DIQQAT: <br> Uy sharoitida tushirilgan rasmlarni yuklamang. Rasm fotosalonda tushirilgan bo’lishi kerak.</b>
                                            </p>
                                            <p class="content-txt-info">Yuklanayotgan fotosurat maksimal hajmi <b>240 KB</b> dan oshmasligi.<br>
                                            Fotosurat kengligi kamida <b>600X600 piksel</b> yoki <b>5x5 sm</b> bo'lishi lozim.<br>
                                            Fotosurat foni oq va ravshan bo'lishi lozim.<br>
                                            Fotosuratni kerakli hajmda kesish va tayyorlash uchun mana <b><a href="https://tsg.phototool.state.gov/photo" target="_blank">bu yerga</a></b> o'ting. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="text-uppercase submit_btn">Anketani Yuborish</button>
                                </div>
                            </div>
                        </div>
                        
                       
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
<script>
    
    function getRegion(regions, id) {
        let countryId = document.getElementById('country_id_' + id).value;
           
        let regionId = document.getElementById('region_id_' + id);
        regions =  JSON.parse(regions);
        districts = JSON.parse(districts);
        
        regions = regions.filter(region => region.country_id == countryId)
        let text = '';
        for (let i = 0; i < regions.length; i++) {
            text += `<option value=${regions[i].id}>${regions[i].name_uz}</option>` 
        }
        
        let district = '';
        for(let i = 0; i < districts.length; i++){
            district += `<option value=${districts[i].id}>${districts[i].name_uz}</option>` 
        }
        if(regions)
        {
            document.getElementById('region_id_' + id).innerHTML = text; 
            document.getElementById('district_id_' + id).innerHTML = district; 
        }
    }
    
    function getDistricts(districts, id) {
        
        let regionId = document.getElementById('region_id_' + id).value;
        
        let districtId = document.getElementById('district_id_' + id);
        $('#district_id_' + id).remove(1);
            
        districts = JSON.parse(districts);
        console.log('ok');
        districts = districts.filter(district => district.region_id == regionId)
        
        let text = '';
        for (let i = 0; i < districts.length; i++) {
            text += `<option value=${districts[i].id}>${districts[i].name_uz}</option>` 
        }
        if(districts)
        {
            document.getElementById('district_id_' + id).innerHTML = text; 
        }
        
        
    }
    
    function myFunction() {
        var familyStatus = document.getElementById("family_status").value;
        if(familyStatus == "Married") 
        {
            $('#exampleModalCenter_2').modal('show');
        }
        else if(familyStatus == "Unmarried")
        {
            $('#family_inform_div').hide();
        }
        console.log(familyStatus);
        // else
        // {
        //     $('#exampleModalCenter_2').modal('hide');
        //     $("#family_inform_div").attr("style", "display:none");
        //     document.getElementById('family_active').value = 0;
        // }
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
    
    
    $(document).ready(function(){
        
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
        
        $('#reservationdatefourth').each(function() {
            $(this).datetimepicker({
                format: 'DD-MM-YYYY',
                viewMode: 'years',
                locale: moment.locale('en', {
                    week: {
                        dow: 1
                    }
                }),
            })
        })
        
        $(".family-status").attr(
            "data-placeholder", "OILAVIY HOLATINGIZNI TANLANG"
        );
        
        
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
    })
    

</script>
@endsection
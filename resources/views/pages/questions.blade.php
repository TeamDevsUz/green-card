@extends('layouts.main')

@section('content')
<section class="question paddingClass-50">
    <div class="container">
        <div class="question__mainBox">
            <h1 class="text-center text-8 mb-5" style="letter-spacing: 1px;">@lang('global.index-lastBox-title')</h1>
            <div class="toggle toggle-primary mb-0" data-plugin-toggle="">
                <section class="toggle">
                    <a class="toggle-title">@lang('global.green_card_title')</a>
                    <div class="toggle-content" style="display: none;">
                        <p>@lang('global.faq-page-ans-1')</p>
                        <p>@lang('global.faq-page-ans-1.1')</p>
                        <p>@lang('global.faq-page-ans-1.2')</p>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title">@lang('global.faq-page-ques-2')</a>
                    <div class="toggle-content">
                        <ul style="margin-bottom: 0; padding: 15px 35px; background: #eef0f4;">
                            <li>@lang('global.faq-page-ans-2')</li>
                            <li>@lang('global.faq-page-ans-2.1')</li>
                            <li>@lang('global.faq-page-ans-2.2')</li>
                            <li>@lang('global.faq-page-ans-2.3')</li>
                            <li>@lang('global.faq-page-ans-2.4')</li>
                            <li>@lang('global.faq-page-ans-2.5')</li>
                        </ul>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title">@lang('global.faq-page-ques-3')</a>
                    <div class="toggle-content">
                        <p>@lang('global.faq-page-ans-3')</p>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title">@lang('global.faq-page-ques-4')</a>
                    <div class="toggle-content">
                        <p>@lang('global.faq-page-ans-4')</p>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title">@lang('global.faq-page-ques-5')</a>
                    <div class="toggle-content">
                        <p>@lang('global.faq-page-ans-5')</p>
                    </div>
                </section>
                
                <section class="toggle">
                    <a class="toggle-title">@lang('global.faq-page-ques-6')</a>
                    <div class="toggle-content">
                        <p>@lang('global.faq-page-ans-6')</p>
                    </div>
                </section>
                
                <section class="toggle">
                    <a class="toggle-title">@lang('global.faq-page-ques-7')</a>
                    <div class="toggle-content">
                        <p>@lang('global.faq-page-ans-7')</p>
                        <p>@lang('global.faq-page-ans-7.1')</p>
                    </div>
                </section>
                
                <section class="toggle">
                    <a class="toggle-title">@lang('global.faq-page-ques-8')</a>
                    <div class="toggle-content">
                        <p>@lang('global.faq-page-ans-8')</p>
                    </div>
                </section>
                
                <section class="toggle">
                    <a class="toggle-title">@lang('global.faq-page-ques-9')</a>
                    <div class="toggle-content">
                        <p>@lang('global.faq-page-ans-9')</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
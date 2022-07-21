@extends('layouts.main')

@section('content')
<section class="conatcts paddingClass-50">
    <div class="container">
        <div class="conatcts__mainBox">
            <h1 class="text-center text-lg-8 text-md-8 text-sm-8 text-6 mb-lg-5 mb-md-5 mb-sm-5 mb-3" style="letter-spacing: 1px; text-transform:uppercase">Biz bilan aloqa</h1>
            <div class="row flex-lg-row flex-column-reverse">
                <div class="col-lg-6 col-12">
                    <div class="conatcts__mainBox-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11985.899531254348!2d69.29966155!3d41.32028595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef4dac8db33bd%3A0x9ee62f4817372fb2!2z0JTQsNGA0YXQsNC9!5e0!3m2!1sru!2s!4v1653466545922!5m2!1sru!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-12">

                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                        <h4 class="mt-2 mb-1">Bizning <strong>Офис</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Idora:</strong> 1234 Street Name, City Name, United States</li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Telefon:</strong> (123) 456-789</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Elektron pochta:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                        </ul>
                    </div>

                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" style="animation-delay: 950ms;">
                        <h4 class="pt-lg-5 pt-2">Ish <strong>grafigi</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Du-Shan 9:00-18:00</li>
                            <li><i class="far fa-clock top-6"></i> Yakshanba dam olish kuni</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
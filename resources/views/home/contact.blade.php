@extends('layouts.home')

@section('title', 'Contact - ' . $setting->title)


@section('content')
    <section class="breadcrumbs mt-10" style="margin-top: 70px; ">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('myaccount')}}">Contact</a></li>
                </ol>
            </div>
        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    {!! $setting->contact !!}
                </div>
                <div class="col-lg-6">
                    <form action="{{route('sendmessage')}}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Adınız" data-rule="minlen:3" data-msg="Alanı doldurunuz"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Email " data-rule="email"
                                       data-msg="Geçerli bir email giriniz"/>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu"
                                   data-rule="minlen:4" data-msg="Alanı doldurunuz"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="Mesajınızı yazınız" placeholder="Mesaj"></textarea>
                            <div class="validate"></div>
                        </div>

                        {{--******BOZULUYOR TEKRAR KONTROL EDİLMELİ******--}}

                       {{-- <div class="mb-3">
                            <div class="loading">Yükleniyor...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Mesajınız alındı. Teşekkürler !</div>
                        </div>--}}

                        <div class="text-center">
                            <button type="submit">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
@endsection

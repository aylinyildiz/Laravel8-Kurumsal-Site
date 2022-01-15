{{--<!-- Slide 1 -->
<section id="hero" class="d-flex justify-content-center align-items-center" style="background:  url({{asset('assets')}}/img/slider1.jpg) center top no-repeat;">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

        <div class="carousel-item active">
            <div class="carousel-container">
        <img src="{{Storage::url( $slider->first()->image)}}" alt="">
                <h2 class="animated fadeInDown">{{$slider->first()->title}}</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est
                    quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse
                    doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="{{route('aboutus')}}" class="btn-get-started animated fadeInUp">Read More</a>
            </div>
        </div>
    @foreach($slider as $rs)
        <div class="carousel-item">
            <div class="carousel-container">
               <img src="{{Storage::url( $rs->image)}}" alt="">
                <h2 class="animated fadeInDown">{{$rs->title}}</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est
                    quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse
                    doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="{{route('aboutus')}}" class="btn-get-started animated fadeInUp">Read More</a>
            </div>
        </div>
    @endforeach


        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>--}}






<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets')}}/img/slider4.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets')}}/img/slider3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets')}}/img/slider4.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

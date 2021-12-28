<!-- Slide 1 -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    @foreach($slider as $rs)
        <div class="carousel-item active">
            <div class="carousel-container">
              {{--  <img src="{{Storage::url( $rs->image)}}" alt="">--}}
                <h2 class="animated fadeInDown">{{$rs->title}}</h2>
                <p class="animated fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est
                    quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse
                    doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="" class="btn-get-started animated fadeInUp">Read More</a>
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
</section>

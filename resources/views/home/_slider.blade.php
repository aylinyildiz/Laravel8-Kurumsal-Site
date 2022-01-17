
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" >
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{Storage::url( $slider->first()->image)}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a href="{{route('contentdetail',['id'=>$slider->first()->id])}}" class="btn"  style="background-color: #1e4356; color: white">Daha Fazlası İçin Tıklayın</a>
            </div>
        </div>
        @foreach($slider as $rs)
        <div class="carousel-item">

            <div class="carousel-caption d-none d-md-block">
                <a href="{{route('contentdetail',['id'=>$rs->id])}}" class="btn" style="background-color: #1e4356; color: white"> Daha Fazlası İçin Tıklayın</a>
            </div>
            <img src="{{Storage::url( $rs->image)}}" class="d-block w-100" alt="...">
        </div>
        @endforeach

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

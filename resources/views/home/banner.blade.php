<!-- Carousel -->
<div class="row pt-4" >
    <div class="col-sm-12 ">
        <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banners as $key => $item)
                <div class="carousel-item {{$key == '0' ? 'active':'' }}">
                    <a href="{{url('promo/'.$item->slug)}}">
                        <img src="{{asset('image/uploads/banner/'.$item->image)}}" class="img-edit" alt="...">
                    </a>
                </div>
                @endforeach
                <div id="controls">
                    <div onclick="playPause()">
                        <img id="videojs-btn" src="{{asset('frontend/img/ico/videobtn/btn-play.svg')}}" alt="">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                <span class="carousel-control-prev-icon w-50 h-100" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                <span class="carousel-control-next-icon w-50 h-100" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- <div class="col-sm-5">
        <div class="video-atas">
            <div id="player-container">
                <video id="my-video"
                    style="width:100%; height:100%;">
                    <source src="{{asset('frontend/vid/web.mp4')}}" type="video/mp4" />
                </video>
                <div id="controls">
                    <div onclick="playPause()">
                        <img id="videojs-btn" src="{{asset('frontend/img/ico/videobtn/pause-default.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- Carousel -->

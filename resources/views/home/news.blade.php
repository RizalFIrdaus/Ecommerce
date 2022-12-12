<div class="row gx-3">
    <div class="col-md-6 col-12 mb-md-0 mb-2">
        <div id="carouselBerita" class="carousel slide berita" data-bs-ride="carousel" data-interval="false">
            <div class="carousel-inner bnr-size">
              @foreach ($news as $key => $item)
              <div class="carousel-item {{$key == '0' ? 'active':'' }}">
                <a href="{{url('news/'.$item->slug)}}">
                  <img src="{{asset('image/uploads/news/'.$item->image)}}" class="img-edit" alt="...">
                </a>
              </div>
              @endforeach
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBerita" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselBerita" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="col-md-6 col-12">
        <section>
            <div id="caro-news" class="owl-carousel owl-theme">
                <div class="container-iframe">
                  <iframe class="responsive-iframe" style="border-radius: 5px; height: 100%; width: 100%" src="https://www.youtube.com/embed/mJ6-dQwGhvs?html5=1&enablejsapi=1" title="Tips menerima paket dari Indonesia yang dikirim oleh Master Bagasi✨🥰  #kirimpaketkeluarnegeri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="container-iframe">
                  <iframe class="responsive-iframe" style="border-radius: 5px; height: 100%; width: 100%" src="https://www.youtube.com/embed/mJ6-dQwGhvs?html5=1&enablejsapi=1" title="KEBANJIRAN BASO ACI SAMI RAOS❤️‍🔥 #kirimpaketkeluarnegeri #jasatitipindonesia #umkm #jastipmurah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
            </div>
        </section>

    </div>
</div>

{{-- <div class="row">
    <div class="col-sm-4" style="padding-right:0">
      <div id="carouselBerita" class="carousel slide berita" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner bnr-size">
          <div class="carousel-item active">
              <a href="{{ url('/berita/dummy')}}">
                <img src="{{asset('frontend/img/dummy/berita1.jpg')}}" class="img-edit" alt="...">
              </a>
            </div>
            <div class="carousel-item">
              <a href="{{ url('/berita/dummy')}}">
                <img src="{{asset('frontend/img/dummy/berita2.jpg')}}" class="img-edit" alt="...">
              </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBerita" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBerita" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-sm-8" >
      <section>
        <div id="caro-news" class="owl-carousel owl-theme">
              <iframe width="100%" height="100%" style="border-radius: 5px;" src="https://www.youtube.com/embed/mJ6-dQwGhvs?html5=1&enablejsapi=1" title="Tips menerima paket dari Indonesia yang dikirim oleh Master Bagasi✨🥰  #kirimpaketkeluarnegeri" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <div>
            <div class=" video1">
              <iframe width="100%" height="100%"  style="border-radius: 5px;" src="https://www.youtube.com/embed/mJ6-dQwGhvs?html5=1&enablejsapi=1" title="KEBANJIRAN BASO ACI SAMI RAOS❤️‍🔥 #kirimpaketkeluarnegeri #jasatitipindonesia #umkm #jastipmurah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </section>
    </div>
</div> --}}
<div class="mapnih mb-5">
  <svg viewBox="0 0 1376 494" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g id="Group 1" filter="url(#filter0_d_840_372)">
          @foreach($peta as $item)
              <a xlink:title="{{ $item->title }}" data-bs-toggle="modal" data-bs-target="#map"
                  wire:click.prevent="dataMap({{ $item->id }})">
                  <path id="Vector{{ $item->id }}" d="{{ $item->vector }}" fill="#F4F4F4" />
              </a>
          @endforeach
      </g>
      <defs>
          <filter id="filter0_d_840_372" x="0" y="0" width="1376" height="494" filterUnits="userSpaceOnUse"
              color-interpolation-filters="sRGB">
              <feFlood flood-opacity="0" result="BackgroundImageFix" />
              <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                  result="hardAlpha" />
              <feOffset dy="4" />
              <feGaussianBlur stdDeviation="2" />
              <feComposite in2="hardAlpha" operator="out" />
              <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
              <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_840_372" />
              <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_840_372" result="shape" />
          </filter>
      </defs>
  </svg>
 <div>
  <div wire:ignore.self class="modal fade" id="map" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="padding-bottom: 1px;">
                {{-- <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-size: 30px;"></h1> --}}
                <div class="display-5 pb-1">Selamat Datang di Nusantara</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if ($this->data == null)
            @else
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                      <div class="col">
                        <h4>{{$previewMap->title}}</h4>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <img src="{{asset('image/uploads/provinces/'.$previewMap->image)}}" alt="">
                      </div>
                    </div>
                </div>
                {{-- <div class="d-flex justify-content-end mb-2">
                </div> --}}
              </div>
              <div class="modal-footer">
                
                <a href="{{url('daerah/'. $previewMap->slug)}}" class="btn btn-lihat-sm">Lihat Selengkapnya</a>
            </div>
            @endif
        </div>
    </div>
  </div>
 </div>
</div>

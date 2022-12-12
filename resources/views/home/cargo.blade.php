@extends('layouts.app')
@section('content')
<div class="container pop-banjang py-5 " style="color: #fff">
    <div class="row py-4">
        <div class="col-md">
            <div class="card text-center" style="background-color: #00A9EA">
                <div class="card-header">Air Fraight</div>
            </div>
        </div>
    </div>
    <div class="row d-flex flex-row justify-content-center">
        @foreach($cargo as $item)
            <div class="col-md">
                <div class="card text-center">
                    <div class="card-header" style="background-color:  
@php
                  switch ($item->name) {
                    case 1:
                    echo '#F9B973';
              break;
            case 2:
            echo '#FAA863';
              break;
            case 3:
            echo '#FB9752';
              break;
            case 4:
            echo '#FC8642';
              break;
            case 5:
            echo '#FC7531';
              break;
            case 6:
            echo '#FD6421';
              break;
            case 11:
            echo '#FE5310';
              break;
            case 16:
            echo '#FF4200';
              break;
            case 21:
            echo '#ff2200';
              break;
            default:
          }
@endphp">{{ $item->name }} Kg</div>
          <div class=" card-body">
                        <h5 class="card-title" style="color: black; ">Rp.
                            {{ number_format($item->price,2,',','.') }}
                        </h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
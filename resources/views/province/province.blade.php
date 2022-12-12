@extends('layouts.app')
@section('content')

<div class="container mt-5">
    <div class="row pt-4">
        <div class="col">
            @if ($province->image !== null)
            <div class="jumbotron" style="height: 337px;background-image:url('../image/uploads/provinces/{{ $province->image }}'); background-repeat: no-repeat; background-size: cover">
                <div class="d-flex justify-content-start align-items-end pb-3 ps-4 h-100">
                    <div class="text-white">
                        <h1 class="mb-3">{{ $province->title }}</h1>
                    </div>
                </div>
            </div>
            @else
            <div class="jumbotron" style="width: 100%;height:337px ;background-color: #ff4200">
                <div class="d-flex justify-content-start align-items-end pb-3 ps-4 h-100">
                    <div class="text-white">
                        <h1 class="mb-3">{{ $province->title }}</h1>
                    </div>
                </div>
            </div>
            @endif
            
        </div>
    </div>
    <div class="row my-3">
            <div class="col-md d-flex justify-content-center">
                <div class="card w-100">
                    <ul class="list-group list-group-flush shadow">
                        <li class="list-group-item">
                            <div class="wrap-breadcrumb pb-2">
                                <ul>
                                    <li class="item-link"><a href="{{ url('/') }}" class="link" style="font-size: 16px">Home</a>
                                    </li>
                                    <li class="item-link"><span style="font-size: 16px">{{ $province->title }}</span></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="row my-3">
        <div class="container">
            {{-- Livewire Collection Province --}}
            <livewire:frontend.province.collection :categories="$categories" :products="$products" :province="$province">
        </div>
    </div>
</div>

@endsection


@section('script')

    <script>
        $(document).on('contentChanged', function(e) {
            $(".show-more-link").parent().toggleClass('list--show-hidden list--show-all');
            $(".show-more-link").text("Tampilkan lebih banyak..." ? "Tampilkan lebih sedikit..." : "Tampilkan lebih banyak...");
        })
    </script>

<!--using sweetalert via CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const copyBtn = document.getElementById('copyBtn')
    const copyText = document.getElementById('copyText')
    
    copyBtn.onclick = () => {
        copyText.select();    // Selects the text inside the input
        document.execCommand('copy');    // Simply copies the selected text to clipboard 
         Swal.fire({         //displays a pop up with sweetalert
            icon: 'success',
            title: 'Link successful copied',
            showConfirmButton: false,
            timer: 1000
        });
    }
</script>
@endsection

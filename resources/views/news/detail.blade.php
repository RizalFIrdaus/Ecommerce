@extends('layouts.app')
@section('content')
<div class="container mt-5 px-5 min-height-526" style="padding-top: 35px">
    <div class="row">
        <div class="col-9">
            <div class="container px-2" style="border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <div class="item-news mt-3">
                    <h2>{{$news->title}}</h2>
                    <p class="text-lg"><strong>{{$news->author}}, Master Bagasi</strong></p>
                    <p class="text-muted">{{$news->created_at}}</p>
                    <div class="mb-3">
                        <img src="{{asset('image/uploads/news/'.$news->image)}}" alt="" style="width: 100%; height: 560px" >
                    </div>
                    {!! ($news->content) !!}
                </div>
            </div>
        </div>
        <div class="col-3">
            <div style="height: auto; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <div style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)" class="px-2">
                    <h5 class="border-bottom">Berlangganan</h5>
                    <p class="py-2">Sertakan email kamu di bawah ini untuk mendapatkan informasi terupdate dari Master Bagasi via notifikasi email</p>
                    <form action="{{url('news/'.$news->slug.'/subs/add')}}" method="POST">
                        @csrf
                        <div class="d-flex gap-1 mb-4">
                            <input type="email" class="form-control" name="email">
                            <button type="submit" class="btn btn-lihat-sm">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-3" style="height: auto; border: 1px solid rgba(221, 221, 221, 0.466); border-radius: 10px;">
                <div class="p-2" style="border-bottom: 2px solid rgba(221, 221, 221, 0.466)">
                    <h5 class="border-bottom">Recent Post</h5>
                    <div class="p-2">
                        <div class="container">
                        @foreach ($newsCollection as $item)
                            <a href="{{url('news/'.$item->slug)}}" style="color: black; text-decoration: none">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col py-2">
                                        <img src="{{asset('image/uploads/news/'.$item->image)}}" alt="">
                                    </div>
                                    <div class="col py-2">
                                        <p class="thumbnail-news" style="font-size: 12px; margin-bottom: 0;">{{$item->title}}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

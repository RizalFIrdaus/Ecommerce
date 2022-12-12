<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-lL_4Lk3YRATrkR5F"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="{{ asset('frontend/img/ico/default/Favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    {{-- 1. owl carousel min.css --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />

    {{-- 2. owl carousel theme min.css --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- animate --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />

    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/color-01.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/if.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/hebron.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/rijal.css') }}">
    
    
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @livewireStyles

    <title>Masterbagasi - Bringing Happines Into Your Table!</title>
</head>

<body>


    @include('home.navbar')
    
    @yield('content')
    @include('home.popup')

    @include('home.footer')

    <!-- Optional JavaScript; choose one of the two! -->
    @livewireScripts

    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    {{-- 0. jquery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- 1. jquery js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- 2. Owl Carousel min.js --}}
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>

    {{-- video.min.js --}}
    <script src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>

    {{-- main.js --}}
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/if.js') }}"></script>
    <script src="{{ asset('frontend/js/hebron.js') }}"></script>
    {{-- custom js --}}
    <script src="{{ asset('frontend/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('frontend/js/functions.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    @yield('script')
    <script>
        $(document).on('load', function() {
            $('#exampleModalToggle').modal('show');
        });
        window.addEventListener('message', e => {
            if(e.detail){
                alertify.set('notifier', 'position', 'top-center');
                alertify.notify(e.detail.text, e.detail.type);
            }   
        });
        window.addEventListener('popupLogin', event => {
        $('#login').modal('show');
        })
    </script>
   <script type="text/javascript">
window.$crisp=[];window.CRISP_WEBSITE_ID="51d58d78-b842-42db-9c29-0a6ef1498f78";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
    </script>
    @stack('scripts')

<script> //<![CDATA[
function labnolThumb(e){return'<img class="youtube-thumb" src="//i.ytimg.com/vi/'+e+'/hqdefault.jpg"><div class="play-button"></div>'}function labnolIframe(){var e=document.createElement("iframe");e.setAttribute("src","//www.youtube.com/embed/"+this.parentNode.dataset.id+"?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0"),e.setAttribute("frameborder","0"),e.setAttribute("id","youtube-iframe"),this.parentNode.replaceChild(e,this)}!function(){for(var e=document.getElementsByClassName("youtube-player"),t=0;t<e.length;t++){var a=document.createElement("div");a.innerHTML=labnolThumb(e[t].dataset.id),a.onclick=labnolIframe,e[t].appendChild(a)}}();
//]]> </script>
</body>

</html>
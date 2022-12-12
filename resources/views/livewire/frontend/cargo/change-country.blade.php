<div id="deliver-hover" style="min-width: 96px;">
    <p style="font-size:11px; margin-bottom:0; line-height: 1.4">Dikirim ke
        @if (Auth::check())
            @if (Auth::user()->deliverto)
            <span style="font-weight:bold; font-size:16px;" class="d-block">{{$country->name?? 'Pilih Negara'}}</span></p>
            @else
            <span style="font-weight:bold; font-size:16px;" class="d-block">Pilih Negara</span></p>
                
            @endif
        @else
        <span style="font-weight: bold;font-size: 16.5px;" class="d-block"><a href="/login" style="text-decoration: none;color:black">Pilih Negara</a></span></p>
        @endif
        
</div>